<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\QueryChatappPhoneNumbersResponseBody\phoneNumbers\callingConfigure\calling;

class callingConfigure extends Model
{
    /**
     * @var calling
     */
    public $calling;

    /**
     * @var string
     */
    public $callingCallbackUrl;

    /**
     * @var int
     */
    public $maxTalkTime;
    protected $_name = [
        'calling' => 'Calling',
        'callingCallbackUrl' => 'CallingCallbackUrl',
        'maxTalkTime' => 'MaxTalkTime',
    ];

    public function validate()
    {
        if (null !== $this->calling) {
            $this->calling->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calling) {
            $res['Calling'] = null !== $this->calling ? $this->calling->toArray($noStream) : $this->calling;
        }

        if (null !== $this->callingCallbackUrl) {
            $res['CallingCallbackUrl'] = $this->callingCallbackUrl;
        }

        if (null !== $this->maxTalkTime) {
            $res['MaxTalkTime'] = $this->maxTalkTime;
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
        if (isset($map['Calling'])) {
            $model->calling = calling::fromMap($map['Calling']);
        }

        if (isset($map['CallingCallbackUrl'])) {
            $model->callingCallbackUrl = $map['CallingCallbackUrl'];
        }

        if (isset($map['MaxTalkTime'])) {
            $model->maxTalkTime = $map['MaxTalkTime'];
        }

        return $model;
    }
}
