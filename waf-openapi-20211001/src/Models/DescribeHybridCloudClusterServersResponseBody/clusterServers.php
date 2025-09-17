<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudClusterServersResponseBody;

use AlibabaCloud\Dara\Model;

class clusterServers extends Model
{
    /**
     * @var string
     */
    public $continents;

    /**
     * @var int
     */
    public $continentsValue;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $customName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $mid;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $operatorValue;

    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var int
     */
    public $regionCodeValue;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'continents' => 'Continents',
        'continentsValue' => 'ContinentsValue',
        'cpu' => 'Cpu',
        'createTimestamp' => 'CreateTimestamp',
        'customName' => 'CustomName',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'hostName' => 'HostName',
        'ip' => 'Ip',
        'jobStatus' => 'JobStatus',
        'mac' => 'Mac',
        'memory' => 'Memory',
        'mid' => 'Mid',
        'operator' => 'Operator',
        'operatorValue' => 'OperatorValue',
        'regionCode' => 'RegionCode',
        'regionCodeValue' => 'RegionCodeValue',
        'status' => 'Status',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->continents) {
            $res['Continents'] = $this->continents;
        }

        if (null !== $this->continentsValue) {
            $res['ContinentsValue'] = $this->continentsValue;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->customName) {
            $res['CustomName'] = $this->customName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->operatorValue) {
            $res['OperatorValue'] = $this->operatorValue;
        }

        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        if (null !== $this->regionCodeValue) {
            $res['RegionCodeValue'] = $this->regionCodeValue;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['Continents'])) {
            $model->continents = $map['Continents'];
        }

        if (isset($map['ContinentsValue'])) {
            $model->continentsValue = $map['ContinentsValue'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['CustomName'])) {
            $model->customName = $map['CustomName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['OperatorValue'])) {
            $model->operatorValue = $map['OperatorValue'];
        }

        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }

        if (isset($map['RegionCodeValue'])) {
            $model->regionCodeValue = $map['RegionCodeValue'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
