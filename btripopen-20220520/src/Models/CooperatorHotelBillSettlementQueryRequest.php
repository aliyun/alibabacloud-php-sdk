<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class CooperatorHotelBillSettlementQueryRequest extends Model
{
    /**
     * @example cooperator_alibtrip
     *
     * @var string
     */
    public $cooperatorId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2021-10-02
     *
     * @var string
     */
    public $periodEnd;

    /**
     * @example 2021-10-01
     *
     * @var string
     */
    public $periodStart;
    protected $_name = [
        'cooperatorId' => 'cooperator_id',
        'pageNo'       => 'page_no',
        'pageSize'     => 'page_size',
        'periodEnd'    => 'period_end',
        'periodStart'  => 'period_start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cooperatorId) {
            $res['cooperator_id'] = $this->cooperatorId;
        }
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
     * @return CooperatorHotelBillSettlementQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cooperator_id'])) {
            $model->cooperatorId = $map['cooperator_id'];
        }
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
