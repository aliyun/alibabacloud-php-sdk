<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\STAROps\V20260428\Models\ConnectorAuthenticationInput;

use AlibabaCloud\Dara\Model;

class botToken extends Model
{
    /**
     * @var string
     */
    public $botToken;

    /**
     * @var string
     */
    public $signingSecret;
    protected $_name = [
        'botToken' => 'botToken',
        'signingSecret' => 'signingSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botToken) {
            $res['botToken'] = $this->botToken;
        }

        if (null !== $this->signingSecret) {
            $res['signingSecret'] = $this->signingSecret;
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
        if (isset($map['botToken'])) {
            $model->botToken = $map['botToken'];
        }

        if (isset($map['signingSecret'])) {
            $model->signingSecret = $map['signingSecret'];
        }

        return $model;
    }
}
