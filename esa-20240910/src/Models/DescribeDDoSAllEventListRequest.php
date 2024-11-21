<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDoSAllEventListRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * If you do not configure this parameter, the current time is used as the end of the time range to query.
     * @example 2023-02-22T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The type of DDoS attacks to query. Valid values:
     *
     *   **web-cc**: web resource exhaustion attacks.
     *   **cc**: connection flood attacks.
     *   **traffic**: volumetric attacks.
     *
     * Default value: web-cc.
     * @example web-cc
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The page number. Valid values: **1** to **100000**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **10**. Valid values: 5, 10, and 20.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example 7096621098****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     * @example 2023-02-12T15:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'eventType'  => 'EventType',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'siteId'     => 'SiteId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDoSAllEventListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
