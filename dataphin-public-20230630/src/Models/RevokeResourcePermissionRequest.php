<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionRequest\revokeCommand;

class RevokeResourcePermissionRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var revokeCommand
     */
    public $revokeCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'revokeCommand' => 'RevokeCommand',
    ];

    public function validate()
    {
        if (null !== $this->revokeCommand) {
            $this->revokeCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->revokeCommand) {
            $res['RevokeCommand'] = null !== $this->revokeCommand ? $this->revokeCommand->toArray($noStream) : $this->revokeCommand;
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

        if (isset($map['RevokeCommand'])) {
            $model->revokeCommand = revokeCommand::fromMap($map['RevokeCommand']);
        }

        return $model;
    }
}
