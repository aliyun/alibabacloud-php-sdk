<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterAttachScriptsRequest extends Model
{
    /**
     * @var string
     */
    public $arch;

    /**
     * @var int
     */
    public $expired;

    /**
     * @var bool
     */
    public $formatDisk;

    /**
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @var string
     */
    public $nodepoolId;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string[]
     */
    public $rdsInstances;
    protected $_name = [
        'arch' => 'arch',
        'expired' => 'expired',
        'formatDisk' => 'format_disk',
        'keepInstanceName' => 'keep_instance_name',
        'nodepoolId' => 'nodepool_id',
        'options' => 'options',
        'rdsInstances' => 'rds_instances',
    ];

    public function validate()
    {
        if (\is_array($this->rdsInstances)) {
            Model::validateArray($this->rdsInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arch) {
            $res['arch'] = $this->arch;
        }

        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
        }

        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }

        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }

        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }

        if (null !== $this->options) {
            $res['options'] = $this->options;
        }

        if (null !== $this->rdsInstances) {
            if (\is_array($this->rdsInstances)) {
                $res['rds_instances'] = [];
                $n1 = 0;
                foreach ($this->rdsInstances as $item1) {
                    $res['rds_instances'][$n1++] = $item1;
                }
            }
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
        if (isset($map['arch'])) {
            $model->arch = $map['arch'];
        }

        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }

        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }

        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }

        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }

        if (isset($map['options'])) {
            $model->options = $map['options'];
        }

        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = [];
                $n1 = 0;
                foreach ($map['rds_instances'] as $item1) {
                    $model->rdsInstances[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
