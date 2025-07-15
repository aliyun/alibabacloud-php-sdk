<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeDeliveryAccRequest extends Model
{
    /**
     * @description The streaming domain.
     *
     *   You can query one or more domain names. If you specify multiple domain names, separate them with commas (,).
     *   If you leave this parameter empty, the data of all domain names within your Alibaba Cloud account is returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * The end time must be later than the start time. The maximum time range that can be specified is one year.
     *
     * @example 2015-12-10T21:05:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the query. Unit: seconds. Valid values:
     *
     *   **300**
     *   **3600**
     *   **86400**
     *
     * If you specify an invalid value or do not specify this parameter, the default value is used. If the specified time range is no more than three days, the default value is 300. If the specified time range is more than three days and no more than 30 days, the default value is 3600. If the specified time range is more than 30 days, the default value is 86400.
     *
     * @example 3600
     *
     * @var string
     */
    public $interval;

    /**
     * @description The name of the Logstore to which log entries are delivered. If you leave this parameter empty, the data of all Logstores is returned.
     *
     * @example logstore_example
     *
     * @var string
     */
    public $logStore;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the Log Service project that is used for real-time log delivery. If you leave this parameter empty, the data of all Log Service projects is returned.
     *
     * @example project_example
     *
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2015-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'logStore' => 'LogStore',
        'ownerId' => 'OwnerId',
        'project' => 'Project',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRealtimeDeliveryAccRequest
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
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
