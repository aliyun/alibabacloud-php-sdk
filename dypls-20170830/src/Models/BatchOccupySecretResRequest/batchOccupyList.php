<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models\BatchOccupySecretResRequest;

use AlibabaCloud\Tea\Model;

class batchOccupyList extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $orderDetailId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $partnerKey;

    /**
     * @var int
     */
    public $resType;

    /**
     * @var int
     */
    public $secretNoType;
    protected $_name = [
        'count'         => 'Count',
        'orderDetailId' => 'OrderDetailId',
        'orderId'       => 'OrderId',
        'partnerKey'    => 'PartnerKey',
        'resType'       => 'ResType',
        'secretNoType'  => 'SecretNoType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->orderDetailId) {
            $res['OrderDetailId'] = $this->orderDetailId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->partnerKey) {
            $res['PartnerKey'] = $this->partnerKey;
        }
        if (null !== $this->resType) {
            $res['ResType'] = $this->resType;
        }
        if (null !== $this->secretNoType) {
            $res['SecretNoType'] = $this->secretNoType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchOccupyList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['OrderDetailId'])) {
            $model->orderDetailId = $map['OrderDetailId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PartnerKey'])) {
            $model->partnerKey = $map['PartnerKey'];
        }
        if (isset($map['ResType'])) {
            $model->resType = $map['ResType'];
        }
        if (isset($map['SecretNoType'])) {
            $model->secretNoType = $map['SecretNoType'];
        }

        return $model;
    }
}
