<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUuidsByVulNamesResponseBody;

use AlibabaCloud\Tea\Model;

class machineInfoStatistics extends Model
{
    /**
     * @description The public IP address of the server on which the exception was detected.
     *
     * @example 47.98.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server on which the exception was detected.
     *
     * @example 172.18.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The instance ID of the server.
     *
     * @example i-wz9gd1os5talju****
     *
     * @var string
     */
    public $machineInstanceId;

    /**
     * @description The IP address of the server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $machineIp;

    /**
     * @description The name of the server.
     *
     * @example TestMachine
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The operating system that the server runs.
     *
     * @example windows
     *
     * @var string
     */
    public $os;

    /**
     * @description The region ID of the server.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The UUID of the server.
     *
     * @example 18375c64-eaa2-4702-92b0-4ee7******
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'machineInstanceId' => 'MachineInstanceId',
        'machineIp' => 'MachineIp',
        'machineName' => 'MachineName',
        'os' => 'Os',
        'regionId' => 'RegionId',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->machineInstanceId) {
            $res['MachineInstanceId'] = $this->machineInstanceId;
        }
        if (null !== $this->machineIp) {
            $res['MachineIp'] = $this->machineIp;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machineInfoStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['MachineInstanceId'])) {
            $model->machineInstanceId = $map['MachineInstanceId'];
        }
        if (isset($map['MachineIp'])) {
            $model->machineIp = $map['MachineIp'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
