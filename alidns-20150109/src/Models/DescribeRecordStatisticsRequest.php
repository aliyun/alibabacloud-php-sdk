<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordStatisticsRequest extends Model
{
    /**
     * @description The domain name.
     *
     * This parameter is required.
     * @example dns-example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the domain name. The parameter value is not case-sensitive. Valid values:
     *
     *   PUBLIC (default): hosted public domain name
     *   CACHE: cache-accelerated domain name
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The end date of the query. Specify the end date in the **YYYY-MM-DD** format.
     *
     * The default value is the day when you query the data.
     * @example 2019-07-04
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The hostname. If you want to resolve the subdomain name www.dns-exmaple.top, set this parameter to www.
     *
     * This parameter is required.
     * @example www
     *
     * @var string
     */
    public $rr;

    /**
     * @description The start date of the query. Specify the start date in the **YYYY-MM-DD** format.
     *
     * This parameter is required.
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
