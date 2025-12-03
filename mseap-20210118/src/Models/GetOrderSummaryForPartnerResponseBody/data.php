<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponseBody\data\orderLines;

class data extends Model
{
    /**
     * @var string
     */
    public $encryptedBuyerId;

    /**
     * @var string
     */
    public $encryptedPayerId;

    /**
     * @var string
     */
    public $encryptedUserId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var orderLines[]
     */
    public $orderLines;
    protected $_name = [
        'encryptedBuyerId' => 'EncryptedBuyerId',
        'encryptedPayerId' => 'EncryptedPayerId',
        'encryptedUserId' => 'EncryptedUserId',
        'orderId' => 'OrderId',
        'orderLines' => 'OrderLines',
    ];

    public function validate()
    {
        if (\is_array($this->orderLines)) {
            Model::validateArray($this->orderLines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedBuyerId) {
            $res['EncryptedBuyerId'] = $this->encryptedBuyerId;
        }

        if (null !== $this->encryptedPayerId) {
            $res['EncryptedPayerId'] = $this->encryptedPayerId;
        }

        if (null !== $this->encryptedUserId) {
            $res['EncryptedUserId'] = $this->encryptedUserId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderLines) {
            if (\is_array($this->orderLines)) {
                $res['OrderLines'] = [];
                $n1 = 0;
                foreach ($this->orderLines as $item1) {
                    $res['OrderLines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EncryptedBuyerId'])) {
            $model->encryptedBuyerId = $map['EncryptedBuyerId'];
        }

        if (isset($map['EncryptedPayerId'])) {
            $model->encryptedPayerId = $map['EncryptedPayerId'];
        }

        if (isset($map['EncryptedUserId'])) {
            $model->encryptedUserId = $map['EncryptedUserId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderLines'])) {
            if (!empty($map['OrderLines'])) {
                $model->orderLines = [];
                $n1 = 0;
                foreach ($map['OrderLines'] as $item1) {
                    $model->orderLines[$n1] = orderLines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
