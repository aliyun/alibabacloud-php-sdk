<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SyncRecordingRulesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
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
