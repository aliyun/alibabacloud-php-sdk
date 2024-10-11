<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveUserGroupMemberRequest\removeCommand;
use AlibabaCloud\Tea\Model;

class RemoveUserGroupMemberRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;

    /**
     * @description This parameter is required.
     *
     * @var removeCommand
     */
    public $removeCommand;
    protected $_name = [
        'opTenantId'    => 'OpTenantId',
        'removeCommand' => 'RemoveCommand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->removeCommand) {
            $res['RemoveCommand'] = null !== $this->removeCommand ? $this->removeCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveUserGroupMemberRequest
     */
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
