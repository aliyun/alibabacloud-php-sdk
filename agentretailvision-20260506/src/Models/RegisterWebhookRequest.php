<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;

class RegisterWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $callbackSecret;

    /**
     * @var string
     */
    public $callbackUrl;
    protected $_name = [
        'callbackSecret' => 'CallbackSecret',
        'callbackUrl' => 'CallbackUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackSecret) {
            $res['CallbackSecret'] = $this->callbackSecret;
        }

        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
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
        if (isset($map['CallbackSecret'])) {
            $model->callbackSecret = $map['CallbackSecret'];
        }

        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        return $model;
    }
}
