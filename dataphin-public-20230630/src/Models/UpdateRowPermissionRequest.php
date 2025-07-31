<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateRowPermissionRequest\updateRowPermissionCommand;
use AlibabaCloud\Tea\Model;

class UpdateRowPermissionRequest extends Model
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
     * @var updateRowPermissionCommand
     */
    public $updateRowPermissionCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateRowPermissionCommand' => 'UpdateRowPermissionCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->updateRowPermissionCommand) {
            $res['UpdateRowPermissionCommand'] = null !== $this->updateRowPermissionCommand ? $this->updateRowPermissionCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRowPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['UpdateRowPermissionCommand'])) {
            $model->updateRowPermissionCommand = updateRowPermissionCommand::fromMap($map['UpdateRowPermissionCommand']);
        }

        return $model;
    }
}
