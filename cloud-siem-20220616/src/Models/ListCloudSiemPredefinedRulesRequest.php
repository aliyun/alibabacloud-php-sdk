<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListCloudSiemPredefinedRulesRequest extends Model
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
     * @description The ATT\\&CK information.
     *
     * @example T1595.002 Vulnerability Scanning
     *
     * @var string
     */
    public $attCk;

    /**
     * @description The page number. Pages start from page 1.
     *
     * This parameter is required.
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
     * @description The method that is used to generate an event. Valid values:
     *
     *   default: built-in method.
     *   singleToSingle: The system generates an event for each alert.
     *   allToSingle: The system generates an event for alerts within a period of time.
     *
     * @example allToSingle
     *
     * @var string
     */
    public $eventTransferType;

    /**
     * @description The ID of the rule.
     *
     * @example 10223
     *
     * @var string
     */
    public $id;

    /**
     * @description The log source.
     *
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSource;

    /**
     * @description The sort method. Valid values:
     *
     *   desc: descending order.
     *   asc: ascending order.
     *
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @description The field that is used to sort the rules. Valid values:
     *
     *   GmtModified: The rules are sorted based on the modification time.
     *   Id (default): The rules are sorted based on the rule ID.
     *
     * @example Id
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the destination account to which you switch the view from the management account.
     *
     * @example 113091674488****
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description The type of the view.
     *
     *   0: view of the current Alibaba Cloud account.
     *   1: view of all accounts for the enterprise.
     *
     * @example 1
     *
     * @var int
     */
    public $roleType;

    /**
     * @description The name of the rule. The name can contain letters, digits, underscores (_), and periods (.).
     *
     * @example waf_scan
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the rule. Valid values:
     *
     *   predefine
     *   customize
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
     *   0: The rule is in the initial state.
     *   10: The simulation data is tested.
     *   15: The business data is being tested.
     *   20: The business data test ends.
     *   100: The rule takes effect.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The risk level. The value is a JSON array. Valid values:
     *
     *   serious: high
     *   suspicious: medium
     *   remind: low
     *
     * @example ["serious","suspicious","remind"]
     *
     * @var string[]
     */
    public $threatLevel;
    protected $_name = [
        'alertType'         => 'AlertType',
        'attCk'             => 'AttCk',
        'currentPage'       => 'CurrentPage',
        'endTime'           => 'EndTime',
        'eventTransferType' => 'EventTransferType',
        'id'                => 'Id',
        'logSource'         => 'LogSource',
        'order'             => 'Order',
        'orderField'        => 'OrderField',
        'pageSize'          => 'PageSize',
        'regionId'          => 'RegionId',
        'roleFor'           => 'RoleFor',
        'roleType'          => 'RoleType',
        'ruleName'          => 'RuleName',
        'ruleType'          => 'RuleType',
        'startTime'         => 'StartTime',
        'status'            => 'Status',
        'threatLevel'       => 'ThreatLevel',
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
        if (null !== $this->attCk) {
            $res['AttCk'] = $this->attCk;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventTransferType) {
            $res['EventTransferType'] = $this->eventTransferType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
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
     * @return ListCloudSiemPredefinedRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AttCk'])) {
            $model->attCk = $map['AttCk'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventTransferType'])) {
            $model->eventTransferType = $map['EventTransferType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
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
