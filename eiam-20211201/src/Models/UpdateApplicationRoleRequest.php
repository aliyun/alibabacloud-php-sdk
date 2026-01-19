<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationRoleRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationRoleId;

    /**
     * @var string
     */
    public $applicationRoleName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationRoleId' => 'ApplicationRoleId',
        'applicationRoleName' => 'ApplicationRoleName',
        'clientToken' => 'ClientToken',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationRoleId) {
            $res['ApplicationRoleId'] = $this->applicationRoleId;
        }

        if (null !== $this->applicationRoleName) {
            $res['ApplicationRoleName'] = $this->applicationRoleName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationRoleId'])) {
            $model->applicationRoleId = $map['ApplicationRoleId'];
        }

        if (isset($map['ApplicationRoleName'])) {
            $model->applicationRoleName = $map['ApplicationRoleName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
