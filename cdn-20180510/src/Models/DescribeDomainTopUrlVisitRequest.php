<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainTopUrlVisitRequest extends Model
{
    /**
     * @description The accelerated domain name for which you want to query data. If you do not set this parameter, frequently requested URLs of all accelerated domain names of your Alibaba Cloud account are queried.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The end time must be later than the start time. The difference between the end time and the start time cannot exceed seven days.
     * @example 2019-10-04T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The method that is used to sort the returned URLs.**** Valid values:
     *
     *   **traf**: network traffic
     *   **pv**: by the number of page views. This is the default value.
     *
     * @example pv
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The start of the time range to query. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * If you want to query data within a specific day, we recommend that you set the value in the yyyy-MM-ddT16:00:00Z format.
     * @example 2019-10-04T00:00:00Z
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
     * @return DescribeDomainTopUrlVisitRequest
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
