<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SMQProxy\V20260409\Models;

use AlibabaCloud\Dara\Model;

class SendMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $messageBodyMD5;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $receiptHandle;
    protected $_name = [
        'messageBodyMD5' => 'MessageBodyMD5',
        'messageId' => 'MessageId',
        'receiptHandle' => 'ReceiptHandle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageBodyMD5) {
            $res['MessageBodyMD5'] = $this->messageBodyMD5;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->receiptHandle) {
            $res['ReceiptHandle'] = $this->receiptHandle;
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
        if (isset($map['MessageBodyMD5'])) {
            $model->messageBodyMD5 = $map['MessageBodyMD5'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['ReceiptHandle'])) {
            $model->receiptHandle = $map['ReceiptHandle'];
        }

        return $model;
    }
}
