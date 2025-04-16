<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveTenantMemberRequest\removeCommand;

class RemoveTenantMemberRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var removeCommand
     */
    public $removeCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'removeCommand' => 'RemoveCommand',
    ];

    public function validate()
    {
        if (null !== $this->removeCommand) {
            $this->removeCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->removeCommand) {
            $res['RemoveCommand'] = null !== $this->removeCommand ? $this->removeCommand->toArray($noStream) : $this->removeCommand;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['RemoveCommand'])) {
            $model->removeCommand = removeCommand::fromMap($map['RemoveCommand']);
        }

        return $model;
    }
}
