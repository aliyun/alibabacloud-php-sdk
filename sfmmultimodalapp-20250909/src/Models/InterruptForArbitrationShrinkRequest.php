<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class InterruptForArbitrationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $hubRequestId;

    /**
     * @var string
     */
    public $interruptShrink;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'appId' => 'AppId',
        'chatId' => 'ChatId',
        'hubRequestId' => 'HubRequestId',
        'interruptShrink' => 'Interrupt',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }

        if (null !== $this->hubRequestId) {
            $res['HubRequestId'] = $this->hubRequestId;
        }

        if (null !== $this->interruptShrink) {
            $res['Interrupt'] = $this->interruptShrink;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }

        if (isset($map['HubRequestId'])) {
            $model->hubRequestId = $map['HubRequestId'];
        }

        if (isset($map['Interrupt'])) {
            $model->interruptShrink = $map['Interrupt'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
