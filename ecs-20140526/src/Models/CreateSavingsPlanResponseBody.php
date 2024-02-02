<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateSavingsPlanResponseBody extends Model
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
     * @var string
     */
    public $savingsPlanId;
    protected $_name = [
        'orderId'       => 'OrderId',
        'requestId'     => 'RequestId',
        'savingsPlanId' => 'SavingsPlanId',
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
        if (null !== $this->savingsPlanId) {
            $res['SavingsPlanId'] = $this->savingsPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSavingsPlanResponseBody
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
        if (isset($map['SavingsPlanId'])) {
            $model->savingsPlanId = $map['SavingsPlanId'];
        }

        return $model;
    }
}
