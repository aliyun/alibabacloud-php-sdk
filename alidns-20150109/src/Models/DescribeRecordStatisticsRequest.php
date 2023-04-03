<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordStatisticsRequest extends Model
{
    /**
     * @description The domain name.
     *
     * @example dns-example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @description The end of the time range to query. Specify the time in the **YYYY-MM-DD** format.
     *
     * The default value is the day when you perform the operation.
     * @example 2019-07-04
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The DNS record.
     *
     * The host record. For example, to resolve `www.dns-exmaple.com`, you must set Rr to www.
     * @example www
     *
     * @var string
     */
    public $rr;

    /**
     * @description The beginning of the time range to query. Specify the time in the **YYYY-MM-DD** format.
     *
     * You can only query DNS records of the last 90 days.
     * @example 2019-07-04
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'endDate'    => 'EndDate',
        'lang'       => 'Lang',
        'rr'         => 'Rr',
        'startDate'  => 'StartDate',
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
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
