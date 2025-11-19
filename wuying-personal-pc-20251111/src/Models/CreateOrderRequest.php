<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\CreateOrderRequest\dynamicProductParams;

class CreateOrderRequest extends Model
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
     * @var dynamicProductParams[]
     */
    public $dynamicProductParams;

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
        'dynamicProductParams' => 'DynamicProductParams',
        'operationType' => 'OperationType',
        'orderFrom' => 'OrderFrom',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->dynamicProductParams)) {
            Model::validateArray($this->dynamicProductParams);
        }
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

        if (null !== $this->dynamicProductParams) {
            if (\is_array($this->dynamicProductParams)) {
                $res['DynamicProductParams'] = [];
                $n1 = 0;
                foreach ($this->dynamicProductParams as $item1) {
                    $res['DynamicProductParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DynamicProductParams'])) {
                $model->dynamicProductParams = [];
                $n1 = 0;
                foreach ($map['DynamicProductParams'] as $item1) {
                    $model->dynamicProductParams[$n1] = dynamicProductParams::fromMap($item1);
                    ++$n1;
                }
            }
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
