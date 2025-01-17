<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUuidsByVulNamesResponseBody;

use AlibabaCloud\Dara\Model;

class machineInfoStatistics extends Model
{
    /**
     * @var string
     */
    public $internetIp;
    /**
     * @var string
     */
    public $intranetIp;
    /**
     * @var string
     */
    public $machineInstanceId;
    /**
     * @var string
     */
    public $machineIp;
    /**
     * @var string
     */
    public $machineName;
    /**
     * @var string
     */
    public $os;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'internetIp'        => 'InternetIp',
        'intranetIp'        => 'IntranetIp',
        'machineInstanceId' => 'MachineInstanceId',
        'machineIp'         => 'MachineIp',
        'machineName'       => 'MachineName',
        'os'                => 'Os',
        'regionId'          => 'RegionId',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
