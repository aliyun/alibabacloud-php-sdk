<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBClusterPayTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'orderId' => 'OrderId',
        'payType' => 'PayType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
