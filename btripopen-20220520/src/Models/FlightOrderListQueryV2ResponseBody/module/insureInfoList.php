<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Tea\Model;

class insureInfoList extends Model
{
    /**
     * @example 1002308231
     *
     * @var string
     */
    public $insureId;

    /**
     * @var float
     */
    public $insureOrderAmount;

    /**
     * @var float
     */
    public $insurePrice;

    /**
     * @var string
     */
    public $insureType;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @example 5
     *
     * @var int
     */
    public $number;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'insureId'          => 'insure_id',
        'insureOrderAmount' => 'insure_order_amount',
        'insurePrice'       => 'insure_price',
        'insureType'        => 'insure_type',
        'nameList'          => 'name_list',
        'number'            => 'number',
        'status'            => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->insureId) {
            $res['insure_id'] = $this->insureId;
        }
        if (null !== $this->insureOrderAmount) {
            $res['insure_order_amount'] = $this->insureOrderAmount;
        }
        if (null !== $this->insurePrice) {
            $res['insure_price'] = $this->insurePrice;
        }
        if (null !== $this->insureType) {
            $res['insure_type'] = $this->insureType;
        }
        if (null !== $this->nameList) {
            $res['name_list'] = $this->nameList;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return insureInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['insure_id'])) {
            $model->insureId = $map['insure_id'];
        }
        if (isset($map['insure_order_amount'])) {
            $model->insureOrderAmount = $map['insure_order_amount'];
        }
        if (isset($map['insure_price'])) {
            $model->insurePrice = $map['insure_price'];
        }
        if (isset($map['insure_type'])) {
            $model->insureType = $map['insure_type'];
        }
        if (isset($map['name_list'])) {
            if (!empty($map['name_list'])) {
                $model->nameList = $map['name_list'];
            }
        }
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
