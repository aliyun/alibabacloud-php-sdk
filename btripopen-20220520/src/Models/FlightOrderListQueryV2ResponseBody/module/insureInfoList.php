<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module;

use AlibabaCloud\Dara\Model;

class insureInfoList extends Model
{
    /**
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
     * @var int
     */
    public $number;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'insureId' => 'insure_id',
        'insureOrderAmount' => 'insure_order_amount',
        'insurePrice' => 'insure_price',
        'insureType' => 'insure_type',
        'nameList' => 'name_list',
        'number' => 'number',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->nameList)) {
            Model::validateArray($this->nameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->nameList)) {
                $res['name_list'] = [];
                $n1 = 0;
                foreach ($this->nameList as $item1) {
                    $res['name_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->nameList = [];
                $n1 = 0;
                foreach ($map['name_list'] as $item1) {
                    $model->nameList[$n1++] = $item1;
                }
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
