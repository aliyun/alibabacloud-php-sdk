<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class RevokeResourcePermissionShrinkRequest extends Model
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
     * @var string
     */
    public $revokeCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'revokeCommandShrink' => 'RevokeCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->revokeCommandShrink) {
            $res['RevokeCommand'] = $this->revokeCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeResourcePermissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['RevokeCommand'])) {
            $model->revokeCommandShrink = $map['RevokeCommand'];
        }

        return $model;
    }
}
