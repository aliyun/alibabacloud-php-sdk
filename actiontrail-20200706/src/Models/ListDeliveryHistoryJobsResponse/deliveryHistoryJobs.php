<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponse;

use AlibabaCloud\Tea\Model;

class deliveryHistoryJobs extends Model
{
    /**
     * @var string
     */
    public $trailName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $homeRegion;
    protected $_name = [
        'trailName'   => 'TrailName',
        'createdTime' => 'CreatedTime',
        'updatedTime' => 'UpdatedTime',
        'homeRegion'  => 'HomeRegion',
    ];

    public function validate()
    {
        Model::validateRequired('trailName', $this->trailName, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('updatedTime', $this->updatedTime, true);
        Model::validateRequired('homeRegion', $this->homeRegion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trailName) {
            $res['TrailName'] = $this->trailName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deliveryHistoryJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrailName'])) {
            $model->trailName = $map['TrailName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }

        return $model;
    }
}
