<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesResponseBody\failedResources;
use AlibabaCloud\Tea\Model;

class TagResourcesResponseBody extends Model
{
    /**
     * @description The information of the resources to which tags fail to be added.
     *
     * >
     *   If tags are added to all resources, the value of `FailedResources` is empty.
     *   If tags fail to be added to some or all resources, the value of `FailedResources` contains the detailed information of the resources.
     *
     * @var failedResources
     */
    public $failedResources;

    /**
     * @description The ID of the request.
     *
     * @example 72086426-9F8C-4A60-852B-864048FD1199
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
     * @return TagResourcesResponseBody
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
