<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsRegionIdResourceRequest extends Model
{
    /**
     * @description The end time of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2020-06-16T06:33:15
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The Internet service provider (ISP). Valid values:
     *
     *   cmcc: China Mobile
     *   telecom: China Telecom
     *   unicom: China Unicom
     *   multiCarrier: multi-line ISP
     *
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @description The order in which the resources to return are sorted. Valid values:
     *
     *   InstanceCount: desc
     *   Area: asc
     *   InternetBandwidth: asc
     *
     * @example InstanceCount: desc
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2020-06-16T06:33:15Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'isp'           => 'Isp',
        'orderByParams' => 'OrderByParams',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'startTime'     => 'StartTime',
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
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsRegionIdResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
