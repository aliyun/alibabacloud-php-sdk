<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class CreateOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $dynamicProductParamsShrink;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $orderFrom;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'autoPay' => 'AutoPay',
        'dynamicProductParamsShrink' => 'DynamicProductParams',
        'operationType' => 'OperationType',
        'orderFrom' => 'OrderFrom',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->dynamicProductParamsShrink) {
            $res['DynamicProductParams'] = $this->dynamicProductParamsShrink;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->orderFrom) {
            $res['OrderFrom'] = $this->orderFrom;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['DynamicProductParams'])) {
            $model->dynamicProductParamsShrink = $map['DynamicProductParams'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['OrderFrom'])) {
            $model->orderFrom = $map['OrderFrom'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
