<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ReplyAgentSessionResponseBody\jsonRpcResponse;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $accepted;
    protected $_name = [
        'accepted' => 'Accepted',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accepted) {
            $res['Accepted'] = $this->accepted;
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
        if (isset($map['Accepted'])) {
            $model->accepted = $map['Accepted'];
        }

        return $model;
    }
}
