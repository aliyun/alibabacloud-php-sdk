<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentIMChannelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bodyShrink;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'bodyShrink' => 'body',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyShrink) {
            $res['body'] = $this->bodyShrink;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['body'])) {
            $model->bodyShrink = $map['body'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
