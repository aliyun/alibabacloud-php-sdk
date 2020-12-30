<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models;

use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotRechargeResponseBody\iotRecharge;
use AlibabaCloud\Tea\Model;

class DoIotRechargeResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var iotRecharge
     */
    public $iotRecharge;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'iotRecharge' => 'IotRecharge',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->iotRecharge) {
            $res['IotRecharge'] = null !== $this->iotRecharge ? $this->iotRecharge->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoIotRechargeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IotRecharge'])) {
            $model->iotRecharge = iotRecharge::fromMap($map['IotRecharge']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
