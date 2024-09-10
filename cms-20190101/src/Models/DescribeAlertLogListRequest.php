<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertLogListRequest extends Model
{
    /**
     * @description The alert contact group.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroup;

    /**
     * @description The end timestamp of the alert logs to be queried.
     *
     * >  The time period between the start time specified by `StartTime` and end time specified by `EndTime` must be less than or equal to 15 days. You must specify StartTime and EndTime at the same time, or leave StartTime and EndTime empty at the same time. If you do not specify this parameter, the alert logs within the last 15 minutes are queried by default.
     * @example 1610074409694
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the alert event. Valid values:
     *
     *   TRIGGERED: The alert is triggered.
     *   RESOLVED: The alert is resolved.
     *
     * @example TRIGGERED
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The dimensions based on which data is aggregated. This parameter is equivalent to the GROUP BY clause in SQL. Valid values:
     *
     *   `product`: aggregates data by cloud service.
     *   `level`: aggregates data by alert level.
     *   `groupId`: aggregates data by application group.
     *   `contactGroup`: aggregates data by alert contact group.
     *   `product,metricName`: aggregates data both by cloud service and by metric.
     *
     * @example product
     *
     * @var string
     */
    public $groupBy;

    /**
     * @description The ID of the application group.
     *
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The statistical period of alert logs. Unit: minutes.
     *
     * @example 360
     *
     * @var string
     */
    public $lastMin;

    /**
     * @description The severity level and notification methods of the alert. Valid values:
     *
     *   P4: Alert notifications are sent by using emails and DingTalk chatbots.
     *   OK: No alert is generated.
     *
     * @example P4
     *
     * @var string
     */
    public $level;

    /**
     * @description The metric name.
     *
     * > For more information about the metrics of different cloud services, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     * @example IntranetInRate
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * >  For information about how to query the namespace of a cloud service, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The page number.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The abbreviation of the service name.
     *
     * For information about how to obtain the abbreviation of a cloud service name, see [DescribeProductsOfActiveMetricRule](https://help.aliyun.com/document_detail/114930.html).
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the alert rule.
     *
     * For information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](https://help.aliyun.com/document_detail/114941.html).
     * @example bc369e8_30f87e517ed2fc****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the alert rule.
     *
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The search keyword that is used to query alert logs.
     *
     * @example alert
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The status of the alert. Valid values:
     *
     *   0: The alert is triggered or cleared.
     *   1: The alert is ineffective.
     *   2: The alert is muted.
     *   3: The host is restarting.
     *   4: No alert notification is sent.
     *
     * If the value of the SendStatus parameter is 0, the value P4 of the Level parameter indicates a triggered alert and the value OK indicates a cleared alert.
     * @example 0
     *
     * @var string
     */
    public $sendStatus;

    /**
     * @description The type of the alert rule. Valid value: METRIC. This value indicates an alert rule for time series metrics.
     *
     * @example METRIC
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The start timestamp of the alert logs to be queried.
     *
     * >  The time period between the start time specified by `StartTime` and the end time specified by `EndTime` must be less than or equal to 15 days. You must specify StartTime and EndTime at the same time, or leave StartTime and EndTime empty at the same time. If you do not specify this parameter, the alert logs within the last 15 minutes are queried by default.
     * @example 1609988009694
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'contactGroup' => 'ContactGroup',
        'endTime'      => 'EndTime',
        'eventType'    => 'EventType',
        'groupBy'      => 'GroupBy',
        'groupId'      => 'GroupId',
        'lastMin'      => 'LastMin',
        'level'        => 'Level',
        'metricName'   => 'MetricName',
        'namespace'    => 'Namespace',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'product'      => 'Product',
        'regionId'     => 'RegionId',
        'ruleId'       => 'RuleId',
        'ruleName'     => 'RuleName',
        'searchKey'    => 'SearchKey',
        'sendStatus'   => 'SendStatus',
        'sourceType'   => 'SourceType',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroup) {
            $res['ContactGroup'] = $this->contactGroup;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->lastMin) {
            $res['LastMin'] = $this->lastMin;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->sendStatus) {
            $res['SendStatus'] = $this->sendStatus;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertLogListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroup'])) {
            $model->contactGroup = $map['ContactGroup'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LastMin'])) {
            $model->lastMin = $map['LastMin'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SendStatus'])) {
            $model->sendStatus = $map['SendStatus'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
