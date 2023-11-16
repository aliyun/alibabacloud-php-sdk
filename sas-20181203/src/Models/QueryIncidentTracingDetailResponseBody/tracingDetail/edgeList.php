<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail;

use AlibabaCloud\Tea\Model;

class edgeList extends Model
{
    /**
     * @description AliUid
     *
     * @example 1277498600854739
     *
     * @var string
     */
    public $aliuid;

    /**
     * @var string
     */
    public $endId;

    /**
     * @var string
     */
    public $endType;

    /**
     * @example mongod
     *
     * @var string
     */
    public $name;

    /**
     * @description Origin
     *
     * @example distribution
     *
     * @var string
     */
    public $origin;

    /**
     * @example {\"bandWidth\":\"8192\",\"internetIp\":\"8.211.13.50\",\"changeReason\":\"EIP_BIND\",\"bindInstanceId\":\"i-gw887xhzjvyjfv7vdfs3\",\"bindType\":\"EIP_ECS\"}
     *
     * @var string
     */
    public $properties;

    /**
     * @var mixed[]
     */
    public $property;

    /**
     * @example 136
     *
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $showType;

    /**
     * @example 23003
     *
     * @var string
     */
    public $startId;

    /**
     * @var string
     */
    public $startType;

    /**
     * @example 1652941117
     *
     * @var string
     */
    public $time;

    /**
     * @example 1636092632
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example elf
     *
     * @var string
     */
    public $type;

    /**
     * @example cis
     *
     * @var string
     */
    public $typeName;

    /**
     * @example 2022-01-13 12:49:33
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description UUID
     *
     * @example 678e29f4-d78f-4a7c-a2bc-38434a138538
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'aliuid'     => 'Aliuid',
        'endId'      => 'EndId',
        'endType'    => 'EndType',
        'name'       => 'Name',
        'origin'     => 'Origin',
        'properties' => 'Properties',
        'property'   => 'Property',
        'ruleId'     => 'RuleId',
        'showType'   => 'ShowType',
        'startId'    => 'StartId',
        'startType'  => 'StartType',
        'time'       => 'Time',
        'timestamp'  => 'Timestamp',
        'type'       => 'Type',
        'typeName'   => 'TypeName',
        'updateTime' => 'UpdateTime',
        'uuid'       => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->endId) {
            $res['EndId'] = $this->endId;
        }
        if (null !== $this->endType) {
            $res['EndType'] = $this->endType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }
        if (null !== $this->startId) {
            $res['StartId'] = $this->startId;
        }
        if (null !== $this->startType) {
            $res['StartType'] = $this->startType;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edgeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['EndId'])) {
            $model->endId = $map['EndId'];
        }
        if (isset($map['EndType'])) {
            $model->endType = $map['EndType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }
        if (isset($map['StartId'])) {
            $model->startId = $map['StartId'];
        }
        if (isset($map['StartType'])) {
            $model->startType = $map['StartType'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
