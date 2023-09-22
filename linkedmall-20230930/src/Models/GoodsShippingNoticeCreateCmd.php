<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GoodsShippingNoticeCreateCmd extends Model
{
    /**
     * @example SF
     *
     * @var string
     */
    public $cpCode;

    /**
     * @example 6693****4352
     *
     * @var string
     */
    public $disputeId;

    /**
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
