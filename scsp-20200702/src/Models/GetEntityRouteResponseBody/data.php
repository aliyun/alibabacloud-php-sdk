<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityRouteResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $entityBizCodeType;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $entityBizCode;

    /**
     * @var string
     */
    public $departmentId;

    /**
     * @var int
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $entityRelationNumber;
    protected $_name = [
        'entityBizCodeType'    => 'EntityBizCodeType',
        'groupId'              => 'GroupId',
        'entityId'             => 'EntityId',
        'serviceId'            => 'ServiceId',
        'entityBizCode'        => 'EntityBizCode',
        'departmentId'         => 'DepartmentId',
        'uniqueId'             => 'UniqueId',
        'entityName'           => 'EntityName',
        'extInfo'              => 'ExtInfo',
        'entityRelationNumber' => 'EntityRelationNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityBizCodeType) {
            $res['EntityBizCodeType'] = $this->entityBizCodeType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->entityBizCode) {
            $res['EntityBizCode'] = $this->entityBizCode;
        }
        if (null !== $this->departmentId) {
            $res['DepartmentId'] = $this->departmentId;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->entityRelationNumber) {
            $res['EntityRelationNumber'] = $this->entityRelationNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityBizCodeType'])) {
            $model->entityBizCodeType = $map['EntityBizCodeType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['EntityBizCode'])) {
            $model->entityBizCode = $map['EntityBizCode'];
        }
        if (isset($map['DepartmentId'])) {
            $model->departmentId = $map['DepartmentId'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['EntityRelationNumber'])) {
            $model->entityRelationNumber = $map['EntityRelationNumber'];
        }

        return $model;
    }
}
