<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody\failedResources;
use AlibabaCloud\Tea\Model;

class UntagResourcesResponseBody extends Model
{
    /**
     * @var failedResources
     */
    public $failedResources;

    /**
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
