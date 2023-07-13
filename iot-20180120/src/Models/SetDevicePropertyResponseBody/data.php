<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\SetDevicePropertyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the message that IoT Platform sends to the device.
     *
     * @example abcabc123
     *
     * @var string
     */
    public $messageId;
    protected $_name = [
        'messageId' => 'MessageId',
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

        return $model;
    }
}
