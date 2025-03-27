<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\StartAIAgentInstanceRequest;

use AlibabaCloud\Dara\Model;

class chatSyncConfig extends Model
{
    /**
     * @var string
     */
    public $IMAIAgentId;

    /**
     * @var string
     */
    public $receiverId;
    protected $_name = [
        'IMAIAgentId' => 'IMAIAgentId',
        'receiverId' => 'ReceiverId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->IMAIAgentId) {
            $res['IMAIAgentId'] = $this->IMAIAgentId;
        }

        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
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
        if (isset($map['IMAIAgentId'])) {
            $model->IMAIAgentId = $map['IMAIAgentId'];
        }

        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }

        return $model;
    }
}
