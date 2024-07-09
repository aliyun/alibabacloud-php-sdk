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
     *   **PV_ZONE**: the logs that record the operations on zones
     *   **PV_RECORD**: the logs that record the operations on DNS records
     *
     * If you set this parameter to other values, all types of operation logs are queried.
     * @example PV_ZONE
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The keyword for searches in "%KeyWord%" mode. The value is not case-sensitive.
     *
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **100**. Default value: **20**.
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
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The global ID of the zone.\\
     * If you leave this parameter empty, the logs that record the operations on all zones that belong to the current Alibaba Cloud account and the DNS records of these zones are queried.
     * @example 6726
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
