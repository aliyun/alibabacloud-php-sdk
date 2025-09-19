<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIdcProbeListResponseBody;

use AlibabaCloud\Dara\Model;

class idcProbes extends Model
{
    /**
     * @var string
     */
    public $idcName;

    /**
     * @var string
     */
    public $idcRegion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var int
     */
    public $intervalPeriod;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $ipSegments;

    /**
     * @var string
     */
    public $linuxPort;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $serviceStatus;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
