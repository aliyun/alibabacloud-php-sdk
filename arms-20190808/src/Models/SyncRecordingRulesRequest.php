<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SyncRecordingRulesRequest extends Model
{
    /**
     * @description The ID of the cluster whose aggregation rule you want to synchronize.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the region. The destination region can be the same as the source region.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of clusters to which you want to synchronize the aggregation rule.
     *
     * This parameter is required.
     * @example {     "cn":[         "c06ca68cd16f14f52bb07772eda***",         "c33dd70a0ac184c1b879d807ab2***",         "c384cf7e4dcb543e6ac8c7d4dd3***"     ],     "us":[         "ce30f833bc4a04a56a06b070319***"     ],     "jp":[      ],     "ap":[      ],     "gov":[      ],     "finance":[      ] }
     *
     * @var string
     */
    public $targetClusters;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'regionId'       => 'RegionId',
        'targetClusters' => 'TargetClusters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->targetClusters) {
            $res['TargetClusters'] = $this->targetClusters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncRecordingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TargetClusters'])) {
            $model->targetClusters = $map['TargetClusters'];
        }

        return $model;
    }
}
