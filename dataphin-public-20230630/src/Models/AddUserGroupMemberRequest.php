<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\AddUserGroupMemberRequest\addCommand;

class AddUserGroupMemberRequest extends Model
{
    /**
     * @var addCommand
     */
    public $addCommand;

    /**
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'addCommand' => 'AddCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate()
    {
        if (null !== $this->addCommand) {
            $this->addCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addCommand) {
            $res['AddCommand'] = null !== $this->addCommand ? $this->addCommand->toArray($noStream) : $this->addCommand;
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
        if (isset($map['AddCommand'])) {
            $model->addCommand = addCommand::fromMap($map['AddCommand']);
        }

        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
