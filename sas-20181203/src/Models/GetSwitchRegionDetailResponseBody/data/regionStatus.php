<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetSwitchRegionDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class regionStatus extends Model
{
    /**
     * @var int
     */
    public $ecsCount;
    /**
     * @var int
     */
    public $gmtPlanSwitchTime;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
