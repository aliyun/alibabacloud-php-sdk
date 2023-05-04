<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainCcActivityLogRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify multiple domain names and separate them with commas (,).
     *
     * If you do not specify this parameter, data of all accelerated domain names under your account is queried.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * The end time must be later than the start time.
     * @example 2018-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **30**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description A custom rule name. Valid values:
     *
     *   default_normal: rule for the normal mode
     *   default_attack: rule for the emergency mode
     *
     * If you leave this parameter empty, events that triggered rate limiting based on all rules are queried.
     * @example test2
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * If you leave this parameter empty, the data collected over the last 24 hours is queried.
     * @example 2018-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The trigger of rate limiting by which you want to query data.
     *
     * If you leave this parameter empty, all events that triggered rate limiting are queried.
     * @example IP
     *
     * @var string
     */
    public $triggerObject;

    /**
     * @description The value of the trigger.
     *
     * If you leave this parameter empty, all events recorded for the trigger are queried.
     * @example 1.2.3.4
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'domainName'    => 'DomainName',
        'endTime'       => 'EndTime',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'ruleName'      => 'RuleName',
        'startTime'     => 'StartTime',
        'triggerObject' => 'TriggerObject',
        'value'         => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->triggerObject) {
            $res['TriggerObject'] = $this->triggerObject;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainCcActivityLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TriggerObject'])) {
            $model->triggerObject = $map['TriggerObject'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
