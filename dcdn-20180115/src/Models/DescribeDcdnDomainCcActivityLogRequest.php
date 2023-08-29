<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainCcActivityLogRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify one or more domain names. Separate multiple domain names with commas (,).
     *
     * If you leave this parameter empty, the data of all domain names is queried.
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * The end time must be later than the start time.
     * @example 2015-12-10T21:05:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number of the page returned. Default value: **1**.
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
     * @description The name of the defense rule.
     *
     *   default_normal in normal mode
     *   default_attack in emergency mode
     *   A custom rule name in custom mode. Example: test2.
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
     * @example 2015-12-10T20:00:00Z
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
     * @description The value of the object that triggered rate limiting.
     *
     * If you leave this parameter empty, events that triggered rate limiting based on all rules are queried.
     * @example 10.10.10.10
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
     * @return DescribeDcdnDomainCcActivityLogRequest
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
