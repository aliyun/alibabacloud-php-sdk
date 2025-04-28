<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\ModifySyncJobRequest;

use AlibabaCloud\Dara\Model;

class sourceDBCluster extends Model
{
    /**
     * @var string
     */
    public $clusterIds;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'jobId' => 'JobId',
        'operateType' => 'OperateType',
        'regionId' => 'RegionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
