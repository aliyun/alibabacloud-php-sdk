<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRowPermissionRequest\deleteRowPermissionCommand;
use AlibabaCloud\Tea\Model;

class DeleteRowPermissionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var deleteRowPermissionCommand
     */
    public $deleteRowPermissionCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'deleteRowPermissionCommand' => 'DeleteRowPermissionCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteRowPermissionCommand) {
            $res['DeleteRowPermissionCommand'] = null !== $this->deleteRowPermissionCommand ? $this->deleteRowPermissionCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRowPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteRowPermissionCommand'])) {
            $model->deleteRowPermissionCommand = deleteRowPermissionCommand::fromMap($map['DeleteRowPermissionCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
