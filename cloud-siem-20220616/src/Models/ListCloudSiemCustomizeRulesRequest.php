<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListCloudSiemCustomizeRulesRequest extends Model
{
    /**
     * @description The alert type.
     *
     * @example scan
     *
     * @var string
     */
    public $alertType;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the custom rule.
     *
     * @example 10223
     *
     * @var string
     */
    public $id;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example Id
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The number of entries per page. The value can be up to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   **cn-hangzhou**: Your assets reside in regions in China.
     *   **ap-southeast-1**: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var int
     */
    public $roleType;

    /**
     * @description The name of the rule. The name can contain letters, digits, underscores (\_), and periods (.).
     *
     * @example waf_scan
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **predefine**
     *   **customize**
     *
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1577808000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the rule. Valid values:
     *
     *   **0**: The rule is in the initial state.
     *   **10**: The simulation data is tested.
     *   **15**: The business data is being tested.
     *   **20**: The business data test is complete.
     *   **100**: The rule is in effect.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The threat level. The value must be a JSON array. Valid values:
     *
     *   **serious**: high-risk.
     *   **suspicious**: medium-risk.
     *   **remind**: low-risk.
     *
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
        'order'       => 'Order',
        'orderField'  => 'OrderField',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'roleFor'     => 'RoleFor',
        'roleType'    => 'RoleType',
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
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
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
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
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
