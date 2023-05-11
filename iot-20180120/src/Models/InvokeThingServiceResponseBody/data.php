<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeThingServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the message. IoT Platform sends the message to the device to call the service.
     *
     * @example abcabcabc1234****
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The result of the synchronous call.
     *
     * If you asynchronously call the service, this parameter is not returned.
     * @example {"param1":1}
     *
     * @var string
     */
    public $result;
    protected $_name = [
        'messageId' => 'MessageId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
