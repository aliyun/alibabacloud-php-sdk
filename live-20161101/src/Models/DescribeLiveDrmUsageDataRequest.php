<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDrmUsageDataRequest extends Model
{
    /**
     * @description The domain name.
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
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2021-05-02T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time granularity of the query. Unit: seconds. Valid values:
     *
     *   300
     *   3600
     *   86400
     *
     * Default value: 3600.
     *
     * @example 3600
     *
     * @var string
     */
    public $interval;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The key that is used to group data. The following keys are supported: domain, region, and drm_type. If you want to specify multiple keys, separate them with commas (,). Default value: domain,region,drm_type. If you leave this parameter empty or set it to null, the returned data is not grouped.
     *
     * @example domain,region,drm_type
     *
     * @var string
     */
    public $splitBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The minimum time granularity is 5 minutes.
     *
     * This parameter is required.
     *
     * @example 2021-05-01T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'splitBy' => 'SplitBy',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->splitBy) {
            $res['SplitBy'] = $this->splitBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDrmUsageDataRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
