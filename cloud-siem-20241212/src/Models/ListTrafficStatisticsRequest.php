<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListTrafficStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int[]
     */
    public $logUserIds;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $regionTag;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $trafficStatisticPeriod;

    /**
     * @var string
     */
    public $trafficStatisticPeriodType;

    /**
     * @var string
     */
    public $trafficStatisticType;
    protected $_name = [
        'lang' => 'Lang',
        'logUserIds' => 'LogUserIds',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'regionTag' => 'RegionTag',
        'roleFor' => 'RoleFor',
        'trafficStatisticPeriod' => 'TrafficStatisticPeriod',
        'trafficStatisticPeriodType' => 'TrafficStatisticPeriodType',
        'trafficStatisticType' => 'TrafficStatisticType',
    ];

    public function validate()
    {
        if (\is_array($this->logUserIds)) {
            Model::validateArray($this->logUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logUserIds) {
            if (\is_array($this->logUserIds)) {
                $res['LogUserIds'] = [];
                $n1 = 0;
                foreach ($this->logUserIds as $item1) {
                    $res['LogUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionTag) {
            $res['RegionTag'] = $this->regionTag;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->trafficStatisticPeriod) {
            $res['TrafficStatisticPeriod'] = $this->trafficStatisticPeriod;
        }

        if (null !== $this->trafficStatisticPeriodType) {
            $res['TrafficStatisticPeriodType'] = $this->trafficStatisticPeriodType;
        }

        if (null !== $this->trafficStatisticType) {
            $res['TrafficStatisticType'] = $this->trafficStatisticType;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogUserIds'])) {
            if (!empty($map['LogUserIds'])) {
                $model->logUserIds = [];
                $n1 = 0;
                foreach ($map['LogUserIds'] as $item1) {
                    $model->logUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionTag'])) {
            $model->regionTag = $map['RegionTag'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['TrafficStatisticPeriod'])) {
            $model->trafficStatisticPeriod = $map['TrafficStatisticPeriod'];
        }

        if (isset($map['TrafficStatisticPeriodType'])) {
            $model->trafficStatisticPeriodType = $map['TrafficStatisticPeriodType'];
        }

        if (isset($map['TrafficStatisticType'])) {
            $model->trafficStatisticType = $map['TrafficStatisticType'];
        }

        return $model;
    }
}
