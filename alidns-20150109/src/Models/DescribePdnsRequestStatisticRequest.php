<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribePdnsRequestStatisticRequest extends Model
{
    /**
     * @description The primary domain name whose statistics you want to query.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the **YYYY-MM-DD** format.
     *
     * The default value is the day when you query the data.
     *
     * @example 2024-7-1 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The beginning of the time range to query. Specify the time in the **YYYY-MM-DD** format.
     *
     * You can query only records of the last 90 days.
     *
     * @example 2024-06-14 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The subdomain name whose statistics you want to query.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $subDomain;

    /**
     * @description The type of the request statistics that you want to query. Valid values:
     *
     *   **ACCOUNT**: queries the request statistics by account.
     *   **DOMAIN**: queries the request statistics by domain name.
     *   **SUB_DOMAIN**: queries the request statistics by subdomain name.
     *
     * @example ACCOUNT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domainName' => 'DomainName',
        'endDate' => 'EndDate',
        'lang' => 'Lang',
        'startDate' => 'StartDate',
        'subDomain' => 'SubDomain',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePdnsRequestStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
