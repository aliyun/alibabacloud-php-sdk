<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LoadAgentSessionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\LoadAgentSessionRequest\params\meta;

class params extends Model
{
    /**
     * @var meta
     */
    public $meta;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'meta' => 'Meta',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (null !== $this->meta) {
            $this->meta->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toArray($noStream) : $this->meta;
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
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
