<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\UpgradeToRCSSignatureResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $chatbotCode;

    /**
     * @var int
     */
    public $signId;
    protected $_name = [
        'chatbotCode' => 'ChatbotCode',
        'signId' => 'SignId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatbotCode) {
            $res['ChatbotCode'] = $this->chatbotCode;
        }

        if (null !== $this->signId) {
            $res['SignId'] = $this->signId;
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
        if (isset($map['ChatbotCode'])) {
            $model->chatbotCode = $map['ChatbotCode'];
        }

        if (isset($map['SignId'])) {
            $model->signId = $map['SignId'];
        }

        return $model;
    }
}
