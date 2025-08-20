<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicDisposalProcessesResponseBody\disposalProcesses;

use AlibabaCloud\Dara\Model;

class deviceBasicInfo extends Model
{
    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $devType;

    /**
     * @var string
     */
    public $disk;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $osVersion;
    protected $_name = [
        'cpu' => 'Cpu',
        'devTag' => 'DevTag',
        'devType' => 'DevType',
        'disk' => 'Disk',
        'hostname' => 'Hostname',
        'mac' => 'Mac',
        'memory' => 'Memory',
        'osVersion' => 'OsVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }

        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }

        return $model;
    }
}
