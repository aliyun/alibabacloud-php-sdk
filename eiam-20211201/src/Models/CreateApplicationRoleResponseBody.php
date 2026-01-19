<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationRoleId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationRoleId' => 'ApplicationRoleId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationRoleId) {
            $res['ApplicationRoleId'] = $this->applicationRoleId;
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
        if (isset($map['ApplicationRoleId'])) {
            $model->applicationRoleId = $map['ApplicationRoleId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
