<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GrantResourcePermissionRequest\grantCommand;
use AlibabaCloud\Tea\Model;

class GrantResourcePermissionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var grantCommand
     */
    public $grantCommand;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'grantCommand' => 'GrantCommand',
        'opTenantId'   => 'OpTenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->grantCommand) {
            $res['GrantCommand'] = null !== $this->grantCommand ? $this->grantCommand->toMap() : null;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantResourcePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GrantCommand'])) {
            $model->grantCommand = grantCommand::fromMap($map['GrantCommand']);
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
