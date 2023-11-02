<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListCloudSiemCustomizeRulesRequest extends Model
{
    /**
     * @example scan
     *
     * @var string
     */
    public $alertType;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 10223
     *
     * @var string
     */
    public $id;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example waf_scan
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example ["serious","suspicious","remind"]
     *
     * @var string[]
     */
    public $threatLevel;
    protected $_name = [
        'alertType'   => 'AlertType',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'id'          => 'Id',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'ruleName'    => 'RuleName',
        'ruleType'    => 'RuleType',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'threatLevel' => 'ThreatLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudSiemCustomizeRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ThreatLevel'])) {
            if (!empty($map['ThreatLevel'])) {
                $model->threatLevel = $map['ThreatLevel'];
            }
        }

        return $model;
    }
}
