<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcShareholderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 90
     *
     * @var string
     */
    public $shouldCap;

    /**
     * @example 2025-01-29
     *
     * @var string
     */
    public $shouldCapTime;

    /**
     * @var string
     */
    public $stockName;

    /**
     * @example 90.00%
     *
     * @var string
     */
    public $stockPercent;

    /**
     * @var string
     */
    public $stockType;
    protected $_name = [
        'shouldCap'     => 'ShouldCap',
        'shouldCapTime' => 'ShouldCapTime',
        'stockName'     => 'StockName',
        'stockPercent'  => 'StockPercent',
        'stockType'     => 'StockType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shouldCap) {
            $res['ShouldCap'] = $this->shouldCap;
        }
        if (null !== $this->shouldCapTime) {
            $res['ShouldCapTime'] = $this->shouldCapTime;
        }
        if (null !== $this->stockName) {
            $res['StockName'] = $this->stockName;
        }
        if (null !== $this->stockPercent) {
            $res['StockPercent'] = $this->stockPercent;
        }
        if (null !== $this->stockType) {
            $res['StockType'] = $this->stockType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ShouldCap'])) {
            $model->shouldCap = $map['ShouldCap'];
        }
        if (isset($map['ShouldCapTime'])) {
            $model->shouldCapTime = $map['ShouldCapTime'];
        }
        if (isset($map['StockName'])) {
            $model->stockName = $map['StockName'];
        }
        if (isset($map['StockPercent'])) {
            $model->stockPercent = $map['StockPercent'];
        }
        if (isset($map['StockType'])) {
            $model->stockType = $map['StockType'];
        }

        return $model;
    }
}
