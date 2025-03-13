<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\TagCloudResourcesResponseBody\failedResources;
use AlibabaCloud\Tea\Model;

class TagCloudResourcesResponseBody extends Model
{
    /**
     * @var failedResources[]
     */
    public $failedResources;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'failedResources' => 'FailedResources',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedResources) {
            $res['FailedResources'] = [];
            if (null !== $this->failedResources && \is_array($this->failedResources)) {
                $n = 0;
                foreach ($this->failedResources as $item) {
                    $res['FailedResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagCloudResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResources'])) {
            if (!empty($map['FailedResources'])) {
                $model->failedResources = [];
                $n                      = 0;
                foreach ($map['FailedResources'] as $item) {
                    $model->failedResources[$n++] = null !== $item ? failedResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
