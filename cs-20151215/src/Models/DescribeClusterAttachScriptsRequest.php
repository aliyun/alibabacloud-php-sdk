<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterAttachScriptsRequest extends Model
{
    /**
     * @description 节点池ID。将节点加入指定节点池。
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description 数据盘挂载
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description 保留实例名称
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description RDS白名单
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 节点CPU架构,支持amd64、arm、arm64。边缘托管集群专有字段。
     *
     * @var string
     */
    public $arch;

    /**
     * @description 边缘托管版集群节点的接入配置。
     *
     * @var string
     */
    public $options;
    protected $_name = [
        'nodepoolId'       => 'nodepool_id',
        'formatDisk'       => 'format_disk',
        'keepInstanceName' => 'keep_instance_name',
        'rdsInstances'     => 'rds_instances',
        'arch'             => 'arch',
        'options'          => 'options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->arch) {
            $res['arch'] = $this->arch;
        }
        if (null !== $this->options) {
            $res['options'] = $this->options;
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
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['arch'])) {
            $model->arch = $map['arch'];
        }
        if (isset($map['options'])) {
            $model->options = $map['options'];
        }

        return $model;
    }
}
