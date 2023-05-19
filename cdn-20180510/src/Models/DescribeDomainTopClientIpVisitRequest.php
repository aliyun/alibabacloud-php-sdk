<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainTopClientIpVisitRequest extends Model
{
    /**
     * @description The ranking of the client IP address returned.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description A list of client IP addresses.
     *
     * @example 2019-10-01T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of entries to return. Maximum value: 100.
     *
     * Default value: 20. The default value 20 specifies that the top 20 data entries are returned.
     * @example 20
     *
     * @var string
     */
    public $limit;

    /**
     * @description The client IP address returned. Only IPv4 addressed are supported.
     *
     * @example beijing
     *
     * @var string
     */
    public $locationNameEn;

    /**
     * @description The method that is used to sort the client IP addresses. Valid values:
     *
     *   **traf**: by network traffic. This is the default value.
     *   **acc**: by the number of requests.
     *
     * @example traf
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeDomainTopClientIpVisit**.
     *
     * @example 2019-09-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'limit'          => 'Limit',
        'locationNameEn' => 'LocationNameEn',
        'sortBy'         => 'SortBy',
        'startTime'      => 'StartTime',
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
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->locationNameEn) {
            $res['LocationNameEn'] = $this->locationNameEn;
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
     * @return DescribeDomainTopClientIpVisitRequest
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['LocationNameEn'])) {
            $model->locationNameEn = $map['LocationNameEn'];
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
