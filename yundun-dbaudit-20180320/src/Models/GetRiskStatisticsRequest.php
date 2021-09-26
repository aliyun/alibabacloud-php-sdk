<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetRiskStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $beginDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $byDbId;

    /**
     * @var int
     */
    public $byRiskLevel;

    /**
     * @var int
     */
    public $byRuleType;

    /**
     * @var int
     */
    public $byRuleId;
    protected $_name = [
        'regionId'    => 'RegionId',
        'instanceId'  => 'InstanceId',
        'dbId'        => 'DbId',
        'beginDate'   => 'BeginDate',
        'endDate'     => 'EndDate',
        'byDbId'      => 'ByDbId',
        'byRiskLevel' => 'ByRiskLevel',
        'byRuleType'  => 'ByRuleType',
        'byRuleId'    => 'ByRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->byDbId) {
            $res['ByDbId'] = $this->byDbId;
        }
        if (null !== $this->byRiskLevel) {
            $res['ByRiskLevel'] = $this->byRiskLevel;
        }
        if (null !== $this->byRuleType) {
            $res['ByRuleType'] = $this->byRuleType;
        }
        if (null !== $this->byRuleId) {
            $res['ByRuleId'] = $this->byRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRiskStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ByDbId'])) {
            $model->byDbId = $map['ByDbId'];
        }
        if (isset($map['ByRiskLevel'])) {
            $model->byRiskLevel = $map['ByRiskLevel'];
        }
        if (isset($map['ByRuleType'])) {
            $model->byRuleType = $map['ByRuleType'];
        }
        if (isset($map['ByRuleId'])) {
            $model->byRuleId = $map['ByRuleId'];
        }

        return $model;
    }
}
