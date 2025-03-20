<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodDomainMax95BpsDataRequest extends Model
{
    /**
     * @description The cycle to query the 95th percentile bandwidth data. Valid values:
     *
     *   day (default)
     *   month
     *
     * @example month
     *
     * @var string
     */
    public $cycle;

    /**
     * @description The domain name to be queried for acceleration. If the parameter is empty, the data merged from all accelerated domain names will be returned by default.
     *
     * > Batch domain name queries are not supported.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description End time point. The date format follows the ISO8601 representation and uses UTC time, in the format yyyy-MM-dd\\"T\\"HH:mm:ssZ.
     *
     * @example 2017-01-12T13:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Start time point. The date format follows the ISO8601 representation and uses UTC time, in the format yyyy-MM-dd\\"T\\"HH:mm:ssZ.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The start time point for getting the data. The date format follows the ISO8601 representation and uses UTC time, in the format yyyy-MM-dd\\"T\\"HH:mm:ssZ.
     *
     * @example 2017-12-21T10:00:00Z
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'cycle' => 'Cycle',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'ownerId' => 'OwnerId',
        'startTime' => 'StartTime',
        'timePoint' => 'TimePoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodDomainMax95BpsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
