<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchTopologyResponseBody\data;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $host;

    /**
     * @var bool
     */
    public $isLeader;

    /**
     * @var int
     */
    public $memoryGB;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'availabilityZone' => 'AvailabilityZone',
        'cpu' => 'Cpu',
        'host' => 'Host',
        'isLeader' => 'IsLeader',
        'memoryGB' => 'MemoryGB',
        'nodeId' => 'NodeId',
        'role' => 'Role',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->isLeader) {
            $res['IsLeader'] = $this->isLeader;
        }

        if (null !== $this->memoryGB) {
            $res['MemoryGB'] = $this->memoryGB;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['IsLeader'])) {
            $model->isLeader = $map['IsLeader'];
        }

        if (isset($map['MemoryGB'])) {
            $model->memoryGB = $map['MemoryGB'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
