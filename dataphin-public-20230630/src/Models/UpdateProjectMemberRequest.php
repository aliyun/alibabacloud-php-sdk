<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateProjectMemberRequest\updateCommand;
use AlibabaCloud\Tea\Model;

class UpdateProjectMemberRequest extends Model
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
     * @var updateCommand
     */
    public $updateCommand;
    protected $_name = [
        'id' => 'Id',
        'opTenantId' => 'OpTenantId',
        'updateCommand' => 'UpdateCommand',
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
        if (null !== $this->updateCommand) {
            $res['UpdateCommand'] = null !== $this->updateCommand ? $this->updateCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProjectMemberRequest
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
        if (isset($map['UpdateCommand'])) {
            $model->updateCommand = updateCommand::fromMap($map['UpdateCommand']);
        }

        return $model;
    }
}
