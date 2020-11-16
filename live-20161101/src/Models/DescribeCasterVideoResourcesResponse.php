<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponse\videoResources;
use AlibabaCloud\Tea\Model;

class DescribeCasterVideoResourcesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var videoResources
     */
    public $videoResources;
    protected $_name = [
        'requestId'      => 'RequestId',
        'total'          => 'Total',
        'videoResources' => 'VideoResources',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('videoResources', $this->videoResources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->videoResources) {
            $res['VideoResources'] = null !== $this->videoResources ? $this->videoResources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterVideoResourcesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['VideoResources'])) {
            $model->videoResources = videoResources::fromMap($map['VideoResources']);
        }

        return $model;
    }
}
