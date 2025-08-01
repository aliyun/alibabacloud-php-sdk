<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListClustersRequest extends Model
{
    /**
     * @example cb7d4cc26c8f845fb8a8255ffd394820e
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example Running
     *
     * @var string
     */
    public $clusterStatus;

    /**
     * @example ACK
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example cb7d4cc26c8f845fb8a8255ffd394820e
     *
     * @var string
     */
    public $id;

    /**
     * @example proxy-next-upstream
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'clusterStatus' => 'cluster_status',
        'clusterType' => 'cluster_type',
        'current' => 'current',
        'id' => 'id',
        'name' => 'name',
        'pageSize' => 'pageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterStatus) {
            $res['cluster_status'] = $this->clusterStatus;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_status'])) {
            $model->clusterStatus = $map['cluster_status'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
