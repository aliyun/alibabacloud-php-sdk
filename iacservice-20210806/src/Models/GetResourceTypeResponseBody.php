<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetResourceTypeResponseBody\resourceType;

class GetResourceTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceType
     */
    public $resourceType;
    protected $_name = [
        'requestId' => 'requestId',
        'resourceType' => 'resourceType',
    ];

    public function validate()
    {
        if (null !== $this->resourceType) {
            $this->resourceType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = null !== $this->resourceType ? $this->resourceType->toArray($noStream) : $this->resourceType;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = resourceType::fromMap($map['resourceType']);
        }

        return $model;
    }
}
