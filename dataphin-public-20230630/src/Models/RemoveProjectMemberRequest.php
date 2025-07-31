<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RemoveProjectMemberRequest\removeCommand;
use AlibabaCloud\Tea\Model;

class RemoveProjectMemberRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 711833
     *
     * @var int
     */
    public $id;

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
        'id' => 'Id',
        'opTenantId' => 'OpTenantId',
        'removeCommand' => 'RemoveCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
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
     * @return RemoveProjectMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['RemoveCommand'])) {
            $model->removeCommand = removeCommand::fromMap($map['RemoveCommand']);
        }

        return $model;
    }
}
