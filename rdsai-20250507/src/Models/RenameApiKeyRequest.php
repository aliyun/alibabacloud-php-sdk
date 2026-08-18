<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class RenameApiKeyRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'instanceId' => 'InstanceId',
        'keyName' => 'KeyName',
        'roleArn' => 'RoleArn',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
