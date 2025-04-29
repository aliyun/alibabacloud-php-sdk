<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\promotionInfo;

use AlibabaCloud\Dara\Model;

class promotionDetailInfoList extends Model
{
    /**
     * @var bool
     */
    public $checkStatus;

    /**
     * @var bool
     */
    public $needCheck;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $promotionName;

    /**
     * @var int
     */
    public $promotionPrice;

    /**
     * @var string
     */
    public $promotionType;
    protected $_name = [
        'checkStatus' => 'check_status',
        'needCheck' => 'need_check',
        'promotionCode' => 'promotion_code',
        'promotionId' => 'promotion_id',
        'promotionName' => 'promotion_name',
        'promotionPrice' => 'promotion_price',
        'promotionType' => 'promotion_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['check_status'] = $this->checkStatus;
        }

        if (null !== $this->needCheck) {
            $res['need_check'] = $this->needCheck;
        }

        if (null !== $this->promotionCode) {
            $res['promotion_code'] = $this->promotionCode;
        }

        if (null !== $this->promotionId) {
            $res['promotion_id'] = $this->promotionId;
        }

        if (null !== $this->promotionName) {
            $res['promotion_name'] = $this->promotionName;
        }

        if (null !== $this->promotionPrice) {
            $res['promotion_price'] = $this->promotionPrice;
        }

        if (null !== $this->promotionType) {
            $res['promotion_type'] = $this->promotionType;
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
        if (isset($map['check_status'])) {
            $model->checkStatus = $map['check_status'];
        }

        if (isset($map['need_check'])) {
            $model->needCheck = $map['need_check'];
        }

        if (isset($map['promotion_code'])) {
            $model->promotionCode = $map['promotion_code'];
        }

        if (isset($map['promotion_id'])) {
            $model->promotionId = $map['promotion_id'];
        }

        if (isset($map['promotion_name'])) {
            $model->promotionName = $map['promotion_name'];
        }

        if (isset($map['promotion_price'])) {
            $model->promotionPrice = $map['promotion_price'];
        }

        if (isset($map['promotion_type'])) {
            $model->promotionType = $map['promotion_type'];
        }

        return $model;
    }
}
