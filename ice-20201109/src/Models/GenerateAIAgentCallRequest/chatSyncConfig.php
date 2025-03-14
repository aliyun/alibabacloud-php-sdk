<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GenerateAIAgentCallRequest;

use AlibabaCloud\Tea\Model;

class chatSyncConfig extends Model
{
    /**
     * @example ******005e4f309379701645f4****
     *
     * @var string
     */
    public $IMAIAgentId;

    /**
     * @example 4167626d312034b2b1c3b7f2f3e41884
     *
     * @var string
     */
    public $receiverId;
    protected $_name = [
        'IMAIAgentId' => 'IMAIAgentId',
        'receiverId' => 'ReceiverId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return chatSyncConfig
     */
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
