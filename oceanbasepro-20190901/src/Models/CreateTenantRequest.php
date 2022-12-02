<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantRequest extends Model
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
    public $description;

    /**
     * @var string
     */
    public $instanceId;

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
    protected $_name = [
        'charset'       => 'Charset',
        'cpu'           => 'Cpu',
        'description'   => 'Description',
        'instanceId'    => 'InstanceId',
        'memory'        => 'Memory',
        'primaryZone'   => 'PrimaryZone',
        'tenantMode'    => 'TenantMode',
        'tenantName'    => 'TenantName',
        'timeZone'      => 'TimeZone',
        'unitNum'       => 'UnitNum',
        'userVSwitchId' => 'UserVSwitchId',
        'userVpcId'     => 'UserVpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTenantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
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

        return $model;
    }
}
