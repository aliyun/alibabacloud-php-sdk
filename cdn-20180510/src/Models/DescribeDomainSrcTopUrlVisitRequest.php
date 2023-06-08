<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainSrcTopUrlVisitRequest extends Model
{
    /**
     * @description The accelerated domain name. Separate multiple accelerated domain names with commas (,).
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query.
     *
     * > The end time must be later than the start time. The duration between the end time and the start time cannot exceed seven days.
     * @example 2018-10-03T20:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The method that is used to sort the returned URLs. Default value: **pv**. Valid values:
     *
     *   **traf**: by network traffic
     *   **pv**: by the number of visits
     *
     * @example pv
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range to query.
     *
     * > If you leave this parameter empty, data within the previous day is queried.
     * @example 2018-10-03T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'sortBy'     => 'SortBy',
        'startTime'  => 'StartTime',
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
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSrcTopUrlVisitRequest
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
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
