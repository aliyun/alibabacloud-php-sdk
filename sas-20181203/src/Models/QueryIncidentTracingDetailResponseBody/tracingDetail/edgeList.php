<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryIncidentTracingDetailResponseBody\tracingDetail;

use AlibabaCloud\Tea\Model;

class edgeList extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account to which the current edge belongs.
     *
     * @example 1277498600854739
     *
     * @var string
     */
    public $aliuid;

    /**
     * @description The ID of the end node for the current edge.
     *
     * @example 223a185f05e5fc3c637
     *
     * @var string
     */
    public $endId;

    /**
     * @description The type of the end node for the current edge. Valid values include the following values:
     *
     *   **process**
     *   **file**
     *   **alert**
     *   **ip**
     *   **domain**
     *
     * @example process_test_process
     *
     * @var string
     */
    public $endType;

    /**
     * @description The name of the current edge.
     *
     * @example mongod
     *
     * @var string
     */
    public $name;

    /**
     * @description The origin vertex ID of the current edge.
     *
     * @example distribution
     *
     * @var string
     */
    public $origin;

    /**
     * @description The text that contains the properties of the current edge.
     *
     * @example {\\"bandWidth\\":\\"8192\\",\\"internetIp\\":\\"8.211.13.50\\",\\"changeReason\\":\\"EIP_BIND\\",\\"bindInstanceId\\":\\"i-gw887xhzjvyjfv7vdfs3\\",\\"bindType\\":\\"EIP_ECS\\"}
     *
     * @var string
     */
    public $properties;

    /**
     * @description The property of the current edge.
     *
     * @example {\\"coverage\\":\\"global\\"}
     *
     * @var mixed[]
     */
    public $property;

    /**
     * @description The ID of the rule based on which the current edge is generated.
     *
     * @example 136
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The display type of the current edge.
     *
     * @example 0
     *
     * @var string
     */
    public $showType;

    /**
     * @description The ID of the start node for the current edge.
     *
     * @example 23003
     *
     * @var string
     */
    public $startId;

    /**
     * @description The type of the start node for the current edge. Valid values include the following values:
     *
     *   **process**
     *   **file**
     *   **alert**:
     *   **ip**
     *   **domain**
     *
     * @example process
     *
     * @var string
     */
    public $startType;

    /**
     * @description The time when the current edge was created.
     *
     * @example 1652941117
     *
     * @var string
     */
    public $time;

    /**
     * @description The UNIX timestamp when the current edge was created. Unit: milliseconds.
     *
     * @example 1636092632
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The type of the current edge. Valid values include the following values:
     *
     *   **process_exec_file**: The relationship indicates an executable file that is run by a process.
     *   **process_connect_ip**: The relationship indicates an IP address that is connected by a process.
     *   **domain_trgger_alert**: The relationship indicates an alert that is triggered for a domain name.
     *
     * @example elf
     *
     * @var string
     */
    public $type;

    /**
     * @description The type of the current edge.
     *
     * @example cis
     *
     * @var string
     */
    public $typeName;

    /**
     * @description The time when the current edge was updated.
     *
     * @example 2022-01-13 12:49:33
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The UUID of the current edge. The SIEM system generates UUIDs for nodes and edges in the provenance graph to help you locate the nodes or edges.
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
