<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class PurchaseSavingPlanOfferingResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $savingPlanIdSets;
    protected $_name = [
        'orderId'          => 'OrderId',
        'requestId'        => 'RequestId',
        'savingPlanIdSets' => 'SavingPlanIdSets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->savingPlanIdSets) {
            $res['SavingPlanIdSets'] = $this->savingPlanIdSets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseSavingPlanOfferingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SavingPlanIdSets'])) {
            if (!empty($map['SavingPlanIdSets'])) {
                $model->savingPlanIdSets = $map['SavingPlanIdSets'];
            }
        }

        return $model;
    }
}
