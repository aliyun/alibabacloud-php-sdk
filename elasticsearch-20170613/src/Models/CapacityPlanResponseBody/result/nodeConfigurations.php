<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CapacityPlanResponseBody\result;

use AlibabaCloud\Tea\Model;

class nodeConfigurations extends Model
{
    /**
     * @description The number of CPUs of the cloud desktop.
     *
     * @example 10
     *
     * @var int
     */
    public $amount;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The type of the hard disk. Valid values:
     *
     *   cloud_essd: enhanced SSD (ESSD)
     *   cloud_ssd: standard SSD
     *   cloud_efficiency: ultra disk
     *   local_ssd: local SSD
     *   local_efficiency: local ultra disk
     *
     * @example 20
     *
     * @var int
     */
    public $disk;

    /**
     * @description The memory size of the current node role.
     *
     * @example cloud_ssd
     *
     * @var string
     */
    public $diskType;

    /**
     * @description The type of the node. Supported types are as follows:
     *
     *   WORKER: data node
     *   WORKER_WARM: cold data node
     *   MASTER: dedicated master node
     *   KIBANA: Kibana node
     *   COORDINATING: client node
     *   ELASTIC_WORKER: elastic node
     *
     * @example 2
     *
     * @var int
     */
    public $memory;

    /**
     * @description The result calculated based on the capacity planning. No default value is available. The values are as follows:
     *
     *   true: indicates that the number of data nodes calculated by capacity planning exceeds the threshold of 50.
     *   false: The number of data nodes calculated by capacity planning is less than 50.
     *
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
