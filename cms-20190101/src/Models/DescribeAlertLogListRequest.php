<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertLogListRequest extends Model
{
    /**
     * @description The start timestamp of the alert logs to be queried. Unit: milliseconds.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $contactGroup;

    /**
     * @description The alert contact group.
     *
     * @example 1610074409694
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The alert information in a JSON string.
     *
     * @example product
     *
     * @var string
     */
    public $groupBy;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeAlertLogList**.
     *
     * @example 7301****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the blacklist policy.
     *
     * @example 360
     *
     * @var string
     */
    public $lastMin;

    /**
     * @description The webhook URLs of alert contacts.
     *
     * @example P4
     *
     * @var string
     */
    public $level;

    /**
     * @description The message returned for the alert callback.
     *
     * @example IntranetInRate
     *
     * @var string
     */
    public $metricName;

    /**
     * @description Indicates whether the call was successful.
     *
     *   true: The call was successful.
     *   false: The call failed.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The severity level and notification methods of the alert. Valid values:
     *
     *   P4: Alert notifications are sent by using emails and DingTalk chatbots.
     *
     * <!---->
     *
     *   OK: No alert is generated.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The email addresses of alert contacts.
     *
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
     * @description The phone numbers of alert contacts that can receive alert text messages.
     *
     * >  This parameter can be returned only on the China site (aliyun.com).
     * @example bc369e8_30f87e517ed2fc****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The identifier of the cloud service. Valid values:
     *
     *   If the cloud service is provided by Alibaba Cloud, the abbreviation of the service name is returned. Example: ECS.
     *   If the cloud service is not provided by Alibaba Cloud, a value in the `acs_Service keyword` format is returned. Example: acs_networkmonitor.
     *
     * @example test123
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The ID of the log.
     *
     * @example alert
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The sending results of alert notifications.
     *
     * @example 0
     *
     * @var string
     */
    public $sendStatus;

    /**
     * @description Indicates whether the alert level was changed. Valid values:
     *
     *   `P4->OK`: The alert level was changed from P4 to OK.
     *   `P4->P4`: The alert level was still P4.
     *
     * @example 1609988009694
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'contactGroup' => 'ContactGroup',
        'endTime'      => 'EndTime',
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
