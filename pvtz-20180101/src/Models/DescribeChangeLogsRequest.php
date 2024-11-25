<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeChangeLogsRequest extends Model
{
    /**
     * @description The end of the time range to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1516779348000
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description The type of operation logs. Valid values:
     *
     *   **PV_ZONE**: the logs that record the operations on built-in authoritative zones
     *   **PV_RECORD**: the logs that record the operations on DNS records
     *   **RESOLVER_RULE**: the logs that record the operations on forwarding rules
     *   **CUSTOM_LINE**: the logs that record the operations on user-defined lines
     *   **RESOLVER_ENDPOINT**: the logs that record the operations on outbound endpoints
     *   **INBOUND_ENDPOINT**: the logs that record the operations on inbound endpoints
     *   **CACHE_RESERVE_DOMAIN**: the logs that record the operations on cache retention domain names
     *
     * >  If you set EntityType to other values, all types of logs are queried.
     * @example PV_ZONE
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The keyword of the operation or the operation content. Fuzzy search is supported. The value is not case-sensitive.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Set the time to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1516779348000
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @description The IP address of the client.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The zone ID. Valid values:
     *
     *   If you set ZoneId to a zone ID, the logs that record the operations on the DNS records of the specified zone are queried.\\
     *
     *   If you leave ZoneId empty, the logs that record the operations on all zones and the DNS records of these zones that belong to the current Alibaba Cloud account are queried.
     *
     * @example df2d03865266bd9842306db586d3****
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'endTimestamp'   => 'EndTimestamp',
        'entityType'     => 'EntityType',
        'keyword'        => 'Keyword',
        'lang'           => 'Lang',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'startTimestamp' => 'StartTimestamp',
        'userClientIp'   => 'UserClientIp',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeChangeLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
