<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\ModifySyncJobRequest;

use AlibabaCloud\Tea\Model;

class sourceDBCluster extends Model
{
    /**
     * @description The ID of the source instance or cluster. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     * @example rm-2zepqn129i9s3l2z3,rm-2zea4dj583129ksp6
     *
     * @var string
     */
    public $clusterIds;

    /**
     * @description The ID of the synchronization job.
     *
     * @example dts-xxxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The operation type.
     *
     * Valid values:
     *
     *   Create
     *   Modify
     *
     * This parameter is required.
     * @example Create
     *
     * @var string
     */
    public $operateType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The source database type.
     *
     * Valid values:
     *
     *   rds: ApsaraDB RDS.
     *   sls: Simple Log Service.
     *   polardb: PolarDB.
     *
     * This parameter is required.
     * @example sls
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterIds'  => 'ClusterIds',
        'jobId'       => 'JobId',
        'operateType' => 'OperateType',
        'regionId'    => 'RegionId',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceDBCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
