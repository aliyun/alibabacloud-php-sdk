<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class CloseSessionRequest extends Model
{
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $sessionToken;
    protected $_name = [
        'sessionId'    => 'SessionId',
        'sessionToken' => 'SessionToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionToken) {
            $res['SessionToken'] = $this->sessionToken;
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
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SessionToken'])) {
            $model->sessionToken = $map['SessionToken'];
        }

        return $model;
    }
}
