<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\TagResourcesResponseBody\failedResources;

class TagResourcesResponseBody extends Model
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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->failedResources) {
            $this->failedResources->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedResources) {
            $res['FailedResources'] = null !== $this->failedResources ? $this->failedResources->toArray($noStream) : $this->failedResources;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FailedResources'])) {
            $model->failedResources = failedResources::fromMap($map['FailedResources']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
