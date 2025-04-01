<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateTenantShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createParamsShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $logDisk;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $primaryZone;

    /**
     * @var string
     */
    public $readOnlyZoneList;

    /**
     * @var string
     */
    public $tenantMode;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var int
     */
    public $unitNum;

    /**
     * @var string
     */
    public $userVSwitchId;

    /**
     * @var string
     */
    public $userVpcId;

    /**
     * @var string
     */
    public $userVpcOwnerId;
    protected $_name = [
        'charset' => 'Charset',
        'cpu' => 'Cpu',
        'createParamsShrink' => 'CreateParams',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'logDisk' => 'LogDisk',
        'memory' => 'Memory',
        'primaryZone' => 'PrimaryZone',
        'readOnlyZoneList' => 'ReadOnlyZoneList',
        'tenantMode' => 'TenantMode',
        'tenantName' => 'TenantName',
        'timeZone' => 'TimeZone',
        'unitNum' => 'UnitNum',
        'userVSwitchId' => 'UserVSwitchId',
        'userVpcId' => 'UserVpcId',
        'userVpcOwnerId' => 'UserVpcOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->createParamsShrink) {
            $res['CreateParams'] = $this->createParamsShrink;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logDisk) {
            $res['LogDisk'] = $this->logDisk;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }

        if (null !== $this->readOnlyZoneList) {
            $res['ReadOnlyZoneList'] = $this->readOnlyZoneList;
        }

        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        if (null !== $this->userVSwitchId) {
            $res['UserVSwitchId'] = $this->userVSwitchId;
        }

        if (null !== $this->userVpcId) {
            $res['UserVpcId'] = $this->userVpcId;
        }

        if (null !== $this->userVpcOwnerId) {
            $res['UserVpcOwnerId'] = $this->userVpcOwnerId;
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
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['CreateParams'])) {
            $model->createParamsShrink = $map['CreateParams'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogDisk'])) {
            $model->logDisk = $map['LogDisk'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }

        if (isset($map['ReadOnlyZoneList'])) {
            $model->readOnlyZoneList = $map['ReadOnlyZoneList'];
        }

        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        if (isset($map['UserVSwitchId'])) {
            $model->userVSwitchId = $map['UserVSwitchId'];
        }

        if (isset($map['UserVpcId'])) {
            $model->userVpcId = $map['UserVpcId'];
        }

        if (isset($map['UserVpcOwnerId'])) {
            $model->userVpcOwnerId = $map['UserVpcOwnerId'];
        }

        return $model;
    }
}
