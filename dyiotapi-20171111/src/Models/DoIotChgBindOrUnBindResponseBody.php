<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models;

use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\DoIotChgBindOrUnBindResponseBody\iotModBind;
use AlibabaCloud\Tea\Model;

class DoIotChgBindOrUnBindResponseBody extends Model
{
    /**
     * @var iotModBind
     */
    public $iotModBind;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'iotModBind' => 'IotModBind',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotModBind) {
            $res['IotModBind'] = null !== $this->iotModBind ? $this->iotModBind->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DoIotChgBindOrUnBindResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotModBind'])) {
            $model->iotModBind = iotModBind::fromMap($map['IotModBind']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
