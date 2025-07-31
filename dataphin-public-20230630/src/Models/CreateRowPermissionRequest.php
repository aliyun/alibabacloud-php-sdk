<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateRowPermissionRequest\createRowPermissionCommand;
use AlibabaCloud\Tea\Model;

class CreateRowPermissionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var createRowPermissionCommand
     */
    public $createRowPermissionCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createRowPermissionCommand' => 'CreateRowPermissionCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createRowPermissionCommand) {
            $res['CreateRowPermissionCommand'] = null !== $this->createRowPermissionCommand ? $this->createRowPermissionCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRowPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateRowPermissionCommand'])) {
            $model->createRowPermissionCommand = createRowPermissionCommand::fromMap($map['CreateRowPermissionCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
