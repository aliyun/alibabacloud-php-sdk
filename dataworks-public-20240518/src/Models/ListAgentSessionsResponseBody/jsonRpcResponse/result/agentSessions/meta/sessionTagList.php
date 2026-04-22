<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentSessionsResponseBody\jsonRpcResponse\result\agentSessions\meta;

use AlibabaCloud\Dara\Model;

class sessionTagList extends Model
{
    /**
     * @var string
     */
    public $sessionTagCode;
    protected $_name = [
        'sessionTagCode' => 'SessionTagCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionTagCode) {
            $res['SessionTagCode'] = $this->sessionTagCode;
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
        if (isset($map['SessionTagCode'])) {
            $model->sessionTagCode = $map['SessionTagCode'];
        }

        return $model;
    }
}
