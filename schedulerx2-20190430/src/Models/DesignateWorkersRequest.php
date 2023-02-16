<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class DesignateWorkersRequest extends Model
{
    /**
     * @description The type of the designated machines. Valid values: 1: worker. 2: label.
     *
     * @example 1
     *
     * @var int
     */
    public $designateType;

    /**
     * @description The ID of the application group.
     *
     * @example hxm.test
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the job.
     *
     * @example 144153
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The designated `labels`. The value is a `JSON` string.
     *
     * @example ["gray"]
     *
     * @var string
     */
    public $labels;

    /**
     * @description The ID of the namespace.
     *
     * @example 4a06d5ea-f576-4326-842c-fb14ea043d8d
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The ID of the region.
     *
     * @example public
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to allow a failover.
     *
     * @example true
     *
     * @var bool
     */
    public $transferable;

    /**
     * @description The designated workers. The value is a JSON string.
     *
     * @example ["127.0.0.1","127.0.0.2"]
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
