<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesResponseBody;

use AlibabaCloud\Dara\Model;

class unassignedMachines extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $customName;

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
    public $mac;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $mid;
    protected $_name = [
        'cpu' => 'Cpu',
        'customName' => 'CustomName',
        'hostName' => 'HostName',
        'ip' => 'Ip',
        'mac' => 'Mac',
        'memory' => 'Memory',
        'mid' => 'Mid',
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

        if (null !== $this->customName) {
            $res['CustomName'] = $this->customName;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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

        if (isset($map['CustomName'])) {
            $model->customName = $map['CustomName'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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

        return $model;
    }
}
