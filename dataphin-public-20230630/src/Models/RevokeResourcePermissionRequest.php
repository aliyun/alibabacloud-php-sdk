<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeResourcePermissionRequest\revokeCommand;
use AlibabaCloud\Tea\Model;

class RevokeResourcePermissionRequest extends Model
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
     * @var revokeCommand
     */
    public $revokeCommand;
    protected $_name = [
        'opTenantId'    => 'OpTenantId',
        'revokeCommand' => 'RevokeCommand',
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
        if (null !== $this->revokeCommand) {
            $res['RevokeCommand'] = null !== $this->revokeCommand ? $this->revokeCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeResourcePermissionRequest
     */
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
