<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponseBody\videoResources;

class DescribeCasterVideoResourcesResponseBody extends Model
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
        'requestId' => 'RequestId',
        'total' => 'Total',
        'videoResources' => 'VideoResources',
    ];

    public function validate()
    {
        if (null !== $this->videoResources) {
            $this->videoResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->videoResources) {
            $res['VideoResources'] = null !== $this->videoResources ? $this->videoResources->toArray($noStream) : $this->videoResources;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
