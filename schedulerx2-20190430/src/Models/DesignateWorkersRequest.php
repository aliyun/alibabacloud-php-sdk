<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class DesignateWorkersRequest extends Model
{
    /**
     * @description 指定机器的类型
     *
     * @var int
     */
    public $designateType;

    /**
     * @description 应用分组ID
     *
     * @var string
     */
    public $groupId;

    /**
     * @description 任务ID
     *
     * @var int
     */
    public $jobId;

    /**
     * @description 指定label列表json格式
     *
     * @var string
     */
    public $labels;

    /**
     * @description 命名空间UID
     *
     * @var string
     */
    public $namespace;

    /**
     * @description 命名空间来源
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description 是否故障转移
     *
     * @var bool
     */
    public $transferable;

    /**
     * @description 指定机器列表json格式
     *
     * @var string
     */
    public $workers;
    protected $_name = [
        'designateType'   => 'DesignateType',
        'groupId'         => 'GroupId',
        'jobId'           => 'JobId',
        'labels'          => 'Labels',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId'        => 'RegionId',
        'transferable'    => 'Transferable',
        'workers'         => 'Workers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->designateType) {
            $res['DesignateType'] = $this->designateType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->transferable) {
            $res['Transferable'] = $this->transferable;
        }
        if (null !== $this->workers) {
            $res['Workers'] = $this->workers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DesignateWorkersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesignateType'])) {
            $model->designateType = $map['DesignateType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Transferable'])) {
            $model->transferable = $map['Transferable'];
        }
        if (isset($map['Workers'])) {
            $model->workers = $map['Workers'];
        }

        return $model;
    }
}
