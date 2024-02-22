<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class GetLogsRequest extends Model
{
    /**
     * @description The time when the query starts. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1684377190
     *
     * @var int
     */
    public $from;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries per page. Valid values: 0 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The search statement or the analytic statement. For more information, see [Log search overview](~~43772~~) and [Log analysis overview](~~53608~~).
     *
     * @example status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5
     *
     * @var string
     */
    public $query;

    /**
     * @description The data management center of the threat analysis feature. Specify this parameter based on the region where your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to sort the results of the log query by time in minutes in descending order. Default value: true. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $reverseOrNot;

    /**
     * @description The time when the query ends. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1684378326
     *
     * @var int
     */
    public $to;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'from'         => 'From',
        'pageIndex'    => 'PageIndex',
        'pageSize'     => 'PageSize',
        'query'        => 'Query',
        'regionId'     => 'RegionId',
        'reverseOrNot' => 'ReverseOrNot',
        'to'           => 'To',
        'total'        => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reverseOrNot) {
            $res['ReverseOrNot'] = $this->reverseOrNot;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReverseOrNot'])) {
            $model->reverseOrNot = $map['ReverseOrNot'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
