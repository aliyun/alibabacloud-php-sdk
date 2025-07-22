<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponseBody;

use AlibabaCloud\SDK\Mseap\V20210118\Models\GetOrderSummaryForPartnerResponseBody\data\orderLines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example UShMru9tcC0RHD/04O0x1OrVkEJOq804ccSkgXSuZH0/42FlhtzyCKa6FofPs8n0
     *
     * @var string
     */
    public $encryptedBuyerId;

    /**
     * @example UShMru9tcC0RHD/04O0x1OrVkEJOq804ccSkgXSuZH0/42FlhtzyCKa6FofPs8n0
     *
     * @var string
     */
    public $encryptedPayerId;

    /**
     * @example UShMru9tcC0RHD/04O0x1OrVkEJOq804ccSkgXSuZH0/42FlhtzyCKa6FofPs8n0
     *
     * @var string
     */
    public $encryptedUserId;

    /**
     * @example 11350044
     *
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

    public function validate() {}

    public function toMap()
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
            $res['OrderLines'] = [];
            if (null !== $this->orderLines && \is_array($this->orderLines)) {
                $n = 0;
                foreach ($this->orderLines as $item) {
                    $res['OrderLines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['OrderLines'] as $item) {
                    $model->orderLines[$n++] = null !== $item ? orderLines::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
