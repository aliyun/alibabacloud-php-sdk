<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GoodsShippingNoticeCreateCmd extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example OTHER-其他 POST-中国邮政 EMS-EMS EYB-EMS快递包裹 POSTB-邮政快递包裹 STO-申通快递 YTO-圆通快递 YUNDA-韵达快递 ZJS-宅急送 FEDEX-联邦快递 DBKD-德邦物流 SHQ-华强物流 TN-特能 TAOBAO-淘宝物流 ZTO-中通快递 HTKY-百世快递 TTKDEX-天天快递 SF-顺丰速运 ZTKY-中铁物流 QFKD-全峰快递 JT-极兔物流
     *
     * @var string
     */
    public $cpCode;

    /**
     * @description This parameter is required.
     *
     * @example 6693****4352
     *
     * @var string
     */
    public $disputeId;

    /**
     * @description This parameter is required.
     *
     * @example SF145****4351
     *
     * @var string
     */
    public $logisticsNo;
    protected $_name = [
        'cpCode'      => 'cpCode',
        'disputeId'   => 'disputeId',
        'logisticsNo' => 'logisticsNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpCode) {
            $res['cpCode'] = $this->cpCode;
        }
        if (null !== $this->disputeId) {
            $res['disputeId'] = $this->disputeId;
        }
        if (null !== $this->logisticsNo) {
            $res['logisticsNo'] = $this->logisticsNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GoodsShippingNoticeCreateCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpCode'])) {
            $model->cpCode = $map['cpCode'];
        }
        if (isset($map['disputeId'])) {
            $model->disputeId = $map['disputeId'];
        }
        if (isset($map['logisticsNo'])) {
            $model->logisticsNo = $map['logisticsNo'];
        }

        return $model;
    }
}
