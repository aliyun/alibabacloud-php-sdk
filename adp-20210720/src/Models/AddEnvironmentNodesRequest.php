<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentNodesRequest\dataDisk;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentNodesRequest\systemDisk;
use AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentNodesRequest\taints;
use AlibabaCloud\Tea\Model;

class AddEnvironmentNodesRequest extends Model
{
    /**
     * @example /dev/sdb
     *
     * @var string
     */
    public $applicationDisk;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var dataDisk[]
     */
    public $dataDisk;

    /**
     * @example /dev/sdb
     *
     * @var string
     */
    public $etcdDisk;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var string[]
     */
    public $masterPrivateIPs;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $rootPassword;

    /**
     * @var systemDisk[]
     */
    public $systemDisk;

    /**
     * @var taints[]
     */
    public $taints;

    /**
     * @example /dev/sdb
     *
     * @var string
     */
    public $tridentSystemDisk;

    /**
     * @example 80
     *
     * @var int
     */
    public $tridentSystemSizeDisk;

    /**
     * @var string[]
     */
    public $workerPrivateIPs;
    protected $_name = [
        'applicationDisk'       => 'applicationDisk',
        'cpu'                   => 'cpu',
        'dataDisk'              => 'dataDisk',
        'etcdDisk'              => 'etcdDisk',
        'hostName'              => 'hostName',
        'labels'                => 'labels',
        'masterPrivateIPs'      => 'masterPrivateIPs',
        'memory'                => 'memory',
        'os'                    => 'os',
        'rootPassword'          => 'rootPassword',
        'systemDisk'            => 'systemDisk',
        'taints'                => 'taints',
        'tridentSystemDisk'     => 'tridentSystemDisk',
        'tridentSystemSizeDisk' => 'tridentSystemSizeDisk',
        'workerPrivateIPs'      => 'workerPrivateIPs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationDisk) {
            $res['applicationDisk'] = $this->applicationDisk;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->dataDisk) {
            $res['dataDisk'] = [];
            if (null !== $this->dataDisk && \is_array($this->dataDisk)) {
                $n = 0;
                foreach ($this->dataDisk as $item) {
                    $res['dataDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->etcdDisk) {
            $res['etcdDisk'] = $this->etcdDisk;
        }
        if (null !== $this->hostName) {
            $res['hostName'] = $this->hostName;
        }
        if (null !== $this->labels) {
            $res['labels'] = $this->labels;
        }
        if (null !== $this->masterPrivateIPs) {
            $res['masterPrivateIPs'] = $this->masterPrivateIPs;
        }
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }
        if (null !== $this->os) {
            $res['os'] = $this->os;
        }
        if (null !== $this->rootPassword) {
            $res['rootPassword'] = $this->rootPassword;
        }
        if (null !== $this->systemDisk) {
            $res['systemDisk'] = [];
            if (null !== $this->systemDisk && \is_array($this->systemDisk)) {
                $n = 0;
                foreach ($this->systemDisk as $item) {
                    $res['systemDisk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tridentSystemDisk) {
            $res['tridentSystemDisk'] = $this->tridentSystemDisk;
        }
        if (null !== $this->tridentSystemSizeDisk) {
            $res['tridentSystemSizeDisk'] = $this->tridentSystemSizeDisk;
        }
        if (null !== $this->workerPrivateIPs) {
            $res['workerPrivateIPs'] = $this->workerPrivateIPs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEnvironmentNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationDisk'])) {
            $model->applicationDisk = $map['applicationDisk'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['dataDisk'])) {
            if (!empty($map['dataDisk'])) {
                $model->dataDisk = [];
                $n               = 0;
                foreach ($map['dataDisk'] as $item) {
                    $model->dataDisk[$n++] = null !== $item ? dataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['etcdDisk'])) {
            $model->etcdDisk = $map['etcdDisk'];
        }
        if (isset($map['hostName'])) {
            $model->hostName = $map['hostName'];
        }
        if (isset($map['labels'])) {
            $model->labels = $map['labels'];
        }
        if (isset($map['masterPrivateIPs'])) {
            if (!empty($map['masterPrivateIPs'])) {
                $model->masterPrivateIPs = $map['masterPrivateIPs'];
            }
        }
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }
        if (isset($map['os'])) {
            $model->os = $map['os'];
        }
        if (isset($map['rootPassword'])) {
            $model->rootPassword = $map['rootPassword'];
        }
        if (isset($map['systemDisk'])) {
            if (!empty($map['systemDisk'])) {
                $model->systemDisk = [];
                $n                 = 0;
                foreach ($map['systemDisk'] as $item) {
                    $model->systemDisk[$n++] = null !== $item ? systemDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tridentSystemDisk'])) {
            $model->tridentSystemDisk = $map['tridentSystemDisk'];
        }
        if (isset($map['tridentSystemSizeDisk'])) {
            $model->tridentSystemSizeDisk = $map['tridentSystemSizeDisk'];
        }
        if (isset($map['workerPrivateIPs'])) {
            if (!empty($map['workerPrivateIPs'])) {
                $model->workerPrivateIPs = $map['workerPrivateIPs'];
            }
        }

        return $model;
    }
}
