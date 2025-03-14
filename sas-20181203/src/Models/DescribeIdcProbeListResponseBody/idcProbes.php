<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIdcProbeListResponseBody;

use AlibabaCloud\Tea\Model;

class idcProbes extends Model
{
    /**
     * @description IDC data center name.
     *
     * @example 3K IDC
     *
     * @var string
     */
    public $idcName;

    /**
     * @description Region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $idcRegion;

    /**
     * @description Instance ID of the asset.
     *
     * @example i-xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Instance name.
     *
     * @example oraclexxx
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Public IP address.
     *
     * @example 47.98.*.*
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Scan period.
     *
     * @example 16
     *
     * @var int
     */
    public $intervalPeriod;

    /**
     * @description Private IP of the instance.
     *
     * @example 10.68.*.*
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description IP segment range.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $ipSegments;

    /**
     * @description Linux port.
     *
     * @example 22
     *
     * @var string
     */
    public $linuxPort;

    /**
     * @description The unit of the scan period, with values:
     * - **day**: day.
     * - **hour**: hour.
     *
     * @example day
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Probe service status. Values:
     *
     * - **0**: Active
     * - **1**: Inactive
     *
     * @example 0
     *
     * @var int
     */
    public $serviceStatus;

    /**
     * @description Probe status. Values:
     *
     * - **0**: Enabled
     * - **1**: Disabled
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Server UUID.
     *
     * @example inet-eae02b9a-1dbd-44a6-844c-69072b27****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description Windows port.
     *
     * @example 3389
     *
     * @var string
     */
    public $winPort;
    protected $_name = [
        'idcName' => 'IdcName',
        'idcRegion' => 'IdcRegion',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intervalPeriod' => 'IntervalPeriod',
        'intranetIp' => 'IntranetIp',
        'ipSegments' => 'IpSegments',
        'linuxPort' => 'LinuxPort',
        'periodUnit' => 'PeriodUnit',
        'serviceStatus' => 'ServiceStatus',
        'status' => 'Status',
        'uuid' => 'Uuid',
        'winPort' => 'WinPort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->idcName) {
            $res['IdcName'] = $this->idcName;
        }
        if (null !== $this->idcRegion) {
            $res['IdcRegion'] = $this->idcRegion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intervalPeriod) {
            $res['IntervalPeriod'] = $this->intervalPeriod;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->ipSegments) {
            $res['IpSegments'] = $this->ipSegments;
        }
        if (null !== $this->linuxPort) {
            $res['LinuxPort'] = $this->linuxPort;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->winPort) {
            $res['WinPort'] = $this->winPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return idcProbes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdcName'])) {
            $model->idcName = $map['IdcName'];
        }
        if (isset($map['IdcRegion'])) {
            $model->idcRegion = $map['IdcRegion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntervalPeriod'])) {
            $model->intervalPeriod = $map['IntervalPeriod'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['IpSegments'])) {
            $model->ipSegments = $map['IpSegments'];
        }
        if (isset($map['LinuxPort'])) {
            $model->linuxPort = $map['LinuxPort'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['WinPort'])) {
            $model->winPort = $map['WinPort'];
        }

        return $model;
    }
}
