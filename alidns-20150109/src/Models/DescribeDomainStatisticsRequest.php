<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainStatisticsRequest extends Model
{
    /**
     * @description The domain name. You can call the [DescribeDomains](https://www.alibabacloud.com/help/zh/dns/api-alidns-2015-01-09-describedomains?spm=a2c63.p38356.help-menu-search-29697.d_0) operation to obtain the domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the domain name. Valid values:
     *
     *   PUBLIC (default): hosted public domain name
     *   CACHE: cached public domain name
     *
     * @example PUBLIC CACHE
     *
     * @var string
     */
    public $domainType;

    /**
     * @description The end date of the query. Specify the end date in the **YYYY-MM-DD** format.
     *
     * The default value is the day when you query the data.
     *
     * @example 2019-07-04
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The language of the content within the request and response.
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The start date of the query. Specify the start date in the **YYYY-MM-DD** format.
     *
     * You can only query the DNS records within the last 90 days.``
     *
     * This parameter is required.
     *
     * @example 2019-07-04
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'domainName' => 'DomainName',
        'domainType' => 'DomainType',
        'endDate' => 'EndDate',
        'lang' => 'Lang',
        'startDate' => 'StartDate',
    ];

    public function validate() {}

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
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainStatisticsRequest
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
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
