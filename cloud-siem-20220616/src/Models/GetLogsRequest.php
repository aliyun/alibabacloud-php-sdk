<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class GetLogsRequest extends Model
{
    /**
     * @example 1684377190
     *
     * @var int
     */
    public $from;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example status: 401 | SELECT remote_addr,COUNT(*) as pv GROUP by remote_addr ORDER by pv desc limit 5
     *
     * @var string
     */
    public $query;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example true
     *
     * @var bool
     */
    public $reverseOrNot;

    /**
     * @example 1684378326
     *
     * @var int
     */
    public $to;

    /**
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
