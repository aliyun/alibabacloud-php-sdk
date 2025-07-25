<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeInternetDnsLogsRequest extends Model
{
    /**
     * @description The account ID displayed on the Recursive Resolution (Public DNS) page after you activate Alibaba Cloud Public DNS.
     *
     * @example 51**4
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end time of the query (timestamp, unit: milliseconds). >Warning: If the query time span is too large and the amount of resolution logs for the queried domain is excessive, it may lead to a query timeout or inaccurate query results.
     *
     * @example 1709196299999
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description Return value language, options:
     * - zh: Chinese
     * - en: English
     *
     * Default: en
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description Module type
     * - AUTHORITY (default): Public Authoritative DNS
     * - RECURSION: Public Recursive DNS
     *
     * @example AUTHORITY
     *
     * @var string
     */
    public $module;

    /**
     * @description Page number, default value is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size for query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Query parameters
     * - sourceIp: Source IP address
     * - queryNameFuzzy: Domain name (fuzzy value)
     * - queryType: Record type
     * - value: Resolution result
     * - status: Status
     * - serverIp: Resolution server IP
     *
     * @example {"sourceIp":"59.82.XX.XX","queryType":"A"}
     *
     * @var string
     */
    public $queryCondition;

    /**
     * @var string
     */
    public $recursionProtocolType;

    /**
     * @description The start time of the query (timestamp, unit: milliseconds).
     *
     * @example 1709192640000
     *
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'accountId' => 'AccountId',
        'domainName' => 'DomainName',
        'endTimestamp' => 'EndTimestamp',
        'lang' => 'Lang',
        'module' => 'Module',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryCondition' => 'QueryCondition',
        'recursionProtocolType' => 'RecursionProtocolType',
        'startTimestamp' => 'StartTimestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryCondition) {
            $res['QueryCondition'] = $this->queryCondition;
        }
        if (null !== $this->recursionProtocolType) {
            $res['RecursionProtocolType'] = $this->recursionProtocolType;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInternetDnsLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryCondition'])) {
            $model->queryCondition = $map['QueryCondition'];
        }
        if (isset($map['RecursionProtocolType'])) {
            $model->recursionProtocolType = $map['RecursionProtocolType'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
