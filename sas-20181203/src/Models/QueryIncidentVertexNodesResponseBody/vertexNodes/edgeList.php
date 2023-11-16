<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentVertexNodesResponseBody\vertexNodes;

use AlibabaCloud\Tea\Model;

class edgeList extends Model
{
    /**
     * @description Aliuid
     *
     * @example 20973951
     *
     * @var string
     */
    public $aliuid;

    /**
     * @example 64002
     *
     * @var string
     */
    public $endId;

    /**
     * @example file
     *
     * @var string
     */
    public $endType;

    /**
     * @example jdk
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
     * @example {\"bandWidth\":\"7810048\",\"internetIp\":\"47.57.13.255\",\"changeReason\":\"MODIFY_SPEC\",\"bindInstanceId\":\"i-j6chvo01tle7qfnhewr3\",\"bindType\":\"EIP_ECS\"}
     *
     * @var string
     */
    public $properties;

    /**
     * @var mixed[]
     */
    public $property;

    /**
     * @example 368
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example type
     *
     * @var string
     */
    public $showType;

    /**
     * @example 52003
     *
     * @var string
     */
    public $startId;

    /**
     * @example process
     *
     * @var string
     */
    public $startType;

    /**
     * @example 2021-11-06 11:00:00
     *
     * @var string
     */
    public $time;

    /**
     * @example 1645168444
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @example weak_password
     *
     * @var string
     */
    public $typeName;

    /**
     * @example 2021-12-16T07:20:33.000Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description UUID
     *
     * @example 549237d6-86d1-47f6-9ffa-3f97da9e6b10
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
