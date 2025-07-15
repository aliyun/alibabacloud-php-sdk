<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponseBody\videoResources;
use AlibabaCloud\Tea\Model;

class DescribeCasterVideoResourcesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CF60DB6A-7FD6-426E-9288-122CC1A52FA7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 2
     *
     * @var int
     */
    public $total;

    /**
     * @description The input sources.
     *
     * @var videoResources
     */
    public $videoResources;
    protected $_name = [
        'requestId' => 'RequestId',
        'total' => 'Total',
        'videoResources' => 'VideoResources',
    ];

    public function validate() {}

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
     * @return DescribeCasterVideoResourcesResponseBody
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
