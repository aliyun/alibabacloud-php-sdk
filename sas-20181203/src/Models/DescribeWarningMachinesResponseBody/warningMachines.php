<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWarningMachinesResponseBody;

use AlibabaCloud\Tea\Model;

class warningMachines extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $highWarningCount;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $lowWarningCount;

    /**
     * @var bool
     */
    public $portOpen;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $mediumWarningCount;

    /**
     * @var int
     */
    public $passCount;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'status'             => 'Status',
        'internetIp'         => 'InternetIp',
        'instanceId'         => 'InstanceId',
        'highWarningCount'   => 'HighWarningCount',
        'intranetIp'         => 'IntranetIp',
        'regionId'           => 'RegionId',
        'lowWarningCount'    => 'LowWarningCount',
        'portOpen'           => 'PortOpen',
        'uuid'               => 'Uuid',
        'mediumWarningCount' => 'MediumWarningCount',
        'passCount'          => 'PassCount',
        'instanceName'       => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->highWarningCount) {
            $res['HighWarningCount'] = $this->highWarningCount;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->lowWarningCount) {
            $res['LowWarningCount'] = $this->lowWarningCount;
        }
        if (null !== $this->portOpen) {
            $res['PortOpen'] = $this->portOpen;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->mediumWarningCount) {
            $res['MediumWarningCount'] = $this->mediumWarningCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warningMachines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['HighWarningCount'])) {
            $model->highWarningCount = $map['HighWarningCount'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LowWarningCount'])) {
            $model->lowWarningCount = $map['LowWarningCount'];
        }
        if (isset($map['PortOpen'])) {
            $model->portOpen = $map['PortOpen'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['MediumWarningCount'])) {
            $model->mediumWarningCount = $map['MediumWarningCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
