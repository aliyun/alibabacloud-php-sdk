<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAttachScriptsRequest extends Model
{
    /**
     * @example amd64
     *
     * @var string
     */
    public $arch;

    /**
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @example np1c9229d9be2d432c93f77a88fca0****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @example {\"enableIptables\": true,\"manageRuntime\": true,\"quiet\": true,\"allowedClusterAddons\": [\"kube-proxy\",\"flannel\",\"coredns\"]}
     *
     * @var string
     */
    public $options;

    /**
     * @var string[]
     */
    public $rdsInstances;
    protected $_name = [
        'arch'             => 'arch',
        'formatDisk'       => 'format_disk',
        'keepInstanceName' => 'keep_instance_name',
        'nodepoolId'       => 'nodepool_id',
        'options'          => 'options',
        'rdsInstances'     => 'rds_instances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arch) {
            $res['arch'] = $this->arch;
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
            $res['rds_instances'] = $this->rdsInstances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterAttachScriptsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['arch'])) {
            $model->arch = $map['arch'];
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
                $model->rdsInstances = $map['rds_instances'];
            }
        }

        return $model;
    }
}
