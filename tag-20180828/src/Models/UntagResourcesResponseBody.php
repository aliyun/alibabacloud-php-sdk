<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody\failedResources;
use AlibabaCloud\Tea\Model;

class UntagResourcesResponseBody extends Model
{
    /**
     * @description The information of resources from which tags fail to be removed.
     *
     * >
     *   If tags are removed from all resources, the value of FailedResources is empty.
     *   If tags fail to be removed from some or all resources, the value of FailedResources contains the detailed information of the resources.
     *
     * @var failedResources
     */
    public $failedResources;

    /**
     * @description The ID of the request.
     *
     * @example 43D12436-B10F-4469-8136-FD1C5D2B2083
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
            $res['FailedResources'] = null !== $this->failedResources ? $this->failedResources->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedResources'])) {
            $model->failedResources = failedResources::fromMap($map['FailedResources']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
