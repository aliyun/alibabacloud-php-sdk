<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSwitchRegionDetailResponseBody\data;

use AlibabaCloud\Tea\Model;

class regionStatus extends Model
{
    /**
     * @example 27
     *
     * @var int
     */
    public $ecsCount;

    /**
     * @example 1692858597000
     *
     * @var int
     */
    public $gmtPlanSwitchTime;

    /**
     * @example us-east-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'ecsCount'          => 'EcsCount',
        'gmtPlanSwitchTime' => 'GmtPlanSwitchTime',
        'regionId'          => 'RegionId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->gmtPlanSwitchTime) {
            $res['GmtPlanSwitchTime'] = $this->gmtPlanSwitchTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['GmtPlanSwitchTime'])) {
            $model->gmtPlanSwitchTime = $map['GmtPlanSwitchTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
