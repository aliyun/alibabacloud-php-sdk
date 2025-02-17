<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GoodsShippingNoticeCreateCmd extends Model
{
    /**
     * @var string
     */
    public $cpCode;
    /**
     * @var string
     */
    public $disputeId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
