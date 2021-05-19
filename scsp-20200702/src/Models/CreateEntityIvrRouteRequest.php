<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class CreateEntityIvrRouteRequest extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityBizCode;

    /**
     * @var string
     */
    public $entityBizCodeType;

    /**
     * @var string
     */
    public $entityRelationNumber;

    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'entityId'             => 'EntityId',
        'entityName'           => 'EntityName',
        'entityBizCode'        => 'EntityBizCode',
        'entityBizCodeType'    => 'EntityBizCodeType',
        'entityRelationNumber' => 'EntityRelationNumber',
        'departmentId'         => 'DepartmentId',
        'groupId'              => 'GroupId',
        'serviceId'            => 'ServiceId',
        'extInfo'              => 'ExtInfo',
        'instanceId'           => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityBizCode) {
            $res['EntityBizCode'] = $this->entityBizCode;
        }
        if (null !== $this->entityBizCodeType) {
            $res['EntityBizCodeType'] = $this->entityBizCodeType;
        }
        if (null !== $this->entityRelationNumber) {
            $res['EntityRelationNumber'] = $this->entityRelationNumber;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEntityIvrRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityBizCode'])) {
            $model->entityBizCode = $map['EntityBizCode'];
        }
        if (isset($map['EntityBizCodeType'])) {
            $model->entityBizCodeType = $map['EntityBizCodeType'];
        }
        if (isset($map['EntityRelationNumber'])) {
            $model->entityRelationNumber = $map['EntityRelationNumber'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
