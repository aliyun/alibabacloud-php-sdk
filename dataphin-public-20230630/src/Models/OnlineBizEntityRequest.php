<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OnlineBizEntityRequest\onlineCommand;

class OnlineBizEntityRequest extends Model
{
    /**
     * @var onlineCommand
     */
    public $onlineCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'onlineCommand' => 'OnlineCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->onlineCommand) {
            $this->onlineCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onlineCommand) {
            $res['OnlineCommand'] = null !== $this->onlineCommand ? $this->onlineCommand->toArray($noStream) : $this->onlineCommand;
        }

        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
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
        if (isset($map['OnlineCommand'])) {
            $model->onlineCommand = onlineCommand::fromMap($map['OnlineCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
