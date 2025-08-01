<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListClustersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example c666d4774f0e2440b979bf917bf100e40
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
     * @example 2024-12-25T15:08:19
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 5389fba5-92a1-4ff4-9b26-773b97828144
     *
     * @var string
     */
    public $id;

    /**
     * @example auto-name-sbvCT
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 2024-12-25T15:08:19
     *
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'clusterStatus' => 'cluster_status',
        'clusterType' => 'cluster_type',
        'createdAt' => 'created_at',
        'id' => 'id',
        'name' => 'name',
        'region' => 'region',
        'updatedAt' => 'updated_at',
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
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
