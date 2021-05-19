<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class GetEntityRouteRequest extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var int
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityRelationNumber;

    /**
     * @var string
     */
    public $entityBizCode;
    protected $_name = [
        'entityId'             => 'EntityId',
        'uniqueId'             => 'UniqueId',
        'instanceId'           => 'InstanceId',
        'entityName'           => 'EntityName',
        'entityRelationNumber' => 'EntityRelationNumber',
        'entityBizCode'        => 'EntityBizCode',
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
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }
        if (null !== $this->entityRelationNumber) {
            $res['EntityRelationNumber'] = $this->entityRelationNumber;
        }
        if (null !== $this->entityBizCode) {
            $res['EntityBizCode'] = $this->entityBizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEntityRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }
        if (isset($map['EntityRelationNumber'])) {
            $model->entityRelationNumber = $map['EntityRelationNumber'];
        }
        if (isset($map['EntityBizCode'])) {
            $model->entityBizCode = $map['EntityBizCode'];
        }

        return $model;
    }
}
