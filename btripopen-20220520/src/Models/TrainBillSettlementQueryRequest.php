<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class TrainBillSettlementQueryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 2021-10-02
     *
     * @var string
     */
    public $periodEnd;

    /**
     * @description This parameter is required.
     *
     * @example 2021-10-01
     *
     * @var string
     */
    public $periodStart;
    protected $_name = [
        'pageNo'      => 'page_no',
        'pageSize'    => 'page_size',
        'periodEnd'   => 'period_end',
        'periodStart' => 'period_start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['page_no'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->periodEnd) {
            $res['period_end'] = $this->periodEnd;
        }
        if (null !== $this->periodStart) {
            $res['period_start'] = $this->periodStart;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainBillSettlementQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page_no'])) {
            $model->pageNo = $map['page_no'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['period_end'])) {
            $model->periodEnd = $map['period_end'];
        }
        if (isset($map['period_start'])) {
            $model->periodStart = $map['period_start'];
        }

        return $model;
    }
}
