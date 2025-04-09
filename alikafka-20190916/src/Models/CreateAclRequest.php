<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;

class CreateAclRequest extends Model
{
    /**
     * @var string
     */
    public $aclOperationType;

    /**
     * @var string
     */
    public $aclOperationTypes;

    /**
     * @var string
     */
    public $aclPermissionType;

    /**
     * @var string
     */
    public $aclResourceName;

    /**
     * @var string
     */
    public $aclResourcePatternType;

    /**
     * @var string
     */
    public $aclResourceType;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'aclOperationType' => 'AclOperationType',
        'aclOperationTypes' => 'AclOperationTypes',
        'aclPermissionType' => 'AclPermissionType',
        'aclResourceName' => 'AclResourceName',
        'aclResourcePatternType' => 'AclResourcePatternType',
        'aclResourceType' => 'AclResourceType',
        'host' => 'Host',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclOperationType) {
            $res['AclOperationType'] = $this->aclOperationType;
        }

        if (null !== $this->aclOperationTypes) {
            $res['AclOperationTypes'] = $this->aclOperationTypes;
        }

        if (null !== $this->aclPermissionType) {
            $res['AclPermissionType'] = $this->aclPermissionType;
        }

        if (null !== $this->aclResourceName) {
            $res['AclResourceName'] = $this->aclResourceName;
        }

        if (null !== $this->aclResourcePatternType) {
            $res['AclResourcePatternType'] = $this->aclResourcePatternType;
        }

        if (null !== $this->aclResourceType) {
            $res['AclResourceType'] = $this->aclResourceType;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['AclOperationType'])) {
            $model->aclOperationType = $map['AclOperationType'];
        }

        if (isset($map['AclOperationTypes'])) {
            $model->aclOperationTypes = $map['AclOperationTypes'];
        }

        if (isset($map['AclPermissionType'])) {
            $model->aclPermissionType = $map['AclPermissionType'];
        }

        if (isset($map['AclResourceName'])) {
            $model->aclResourceName = $map['AclResourceName'];
        }

        if (isset($map['AclResourcePatternType'])) {
            $model->aclResourcePatternType = $map['AclResourcePatternType'];
        }

        if (isset($map['AclResourceType'])) {
            $model->aclResourceType = $map['AclResourceType'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
