<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainTopReferVisitRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DescribeDomainTopReferVisit**.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The accelerated domain names. Separate multiple accelerated domain names with commas (,).
     *
     * @example 2019-12-22T12:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The most frequently requested web pages.
     *
     * @example pv
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The number of visits to the web page.
     *
     * @example 2019-12-21T12:00:00Z
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
     * @return DescribeDomainTopReferVisitRequest
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
