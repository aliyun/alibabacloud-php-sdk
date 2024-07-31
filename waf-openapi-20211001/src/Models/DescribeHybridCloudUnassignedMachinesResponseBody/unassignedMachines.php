<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudUnassignedMachinesResponseBody;

use AlibabaCloud\Tea\Model;

class unassignedMachines extends Model
{
    /**
     * @description The number of CPU cores.
     *
     * @example 16
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The name of the node.
     *
     * @example exampleName
     *
     * @var string
     */
    public $customName;

    /**
     * @description The host name.
     *
     * @example online-xagent1
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The IP address of the server.
     *
     * @example 1.X.X.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The media access control (MAC) address of the device.
     *
     * @example 00163e2686ac
     *
     * @var string
     */
    public $mac;

    /**
     * @description The memory size. Unit: KB. A conversion factor of 1,000 is used.
     *
     * @example 31580872
     *
     * @var int
     */
    public $memory;

    /**
     * @description The ID of the node.
     *
     * @example 78db009ab6cf055a9085f9f4****ae3a
     *
     * @var string
     */
    public $mid;
    protected $_name = [
        'cpu'        => 'Cpu',
        'customName' => 'CustomName',
        'hostName'   => 'HostName',
        'ip'         => 'Ip',
        'mac'        => 'Mac',
        'memory'     => 'Memory',
        'mid'        => 'Mid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return unassignedMachines
     */
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
