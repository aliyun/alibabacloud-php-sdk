<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeConfigurations extends Model
{
    /**
     * @description Number of nodes.
     *
     * @example 10
     *
     * @var int
     */
    public $amount;

    /**
     * @description Number of CPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description Disk size, in GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @description Disk type, with meanings as follows:
     *
     * - local_efficiency: Local Efficient Disk
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description Specified memory size for the current node role.
     *
     * @example 2
     *
     * @var int
     */
    public $memory;

    /**
     * @description Node type, with supported types as follows:
     *
     * - ELASTIC_WORKER: Elastic Node
     * @example WORKER
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'amount'   => 'Amount',
        'cpu'      => 'Cpu',
        'disk'     => 'Disk',
        'diskType' => 'DiskType',
        'memory'   => 'Memory',
        'nodeType' => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
