<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class CheckServiceLinkedRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $serviceLinkedRoleExists;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceLinkedRoleExists' => 'ServiceLinkedRoleExists',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceLinkedRoleExists) {
            $res['ServiceLinkedRoleExists'] = $this->serviceLinkedRoleExists;
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

        if (isset($map['ServiceLinkedRoleExists'])) {
            $model->serviceLinkedRoleExists = $map['ServiceLinkedRoleExists'];
        }

        return $model;
    }
}
