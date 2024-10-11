<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class RemoveTenantMemberShrinkRequest extends Model
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
    public $removeCommandShrink;
    protected $_name = [
        'opTenantId'          => 'OpTenantId',
        'removeCommandShrink' => 'RemoveCommand',
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
        if (null !== $this->removeCommandShrink) {
            $res['RemoveCommand'] = $this->removeCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveTenantMemberShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['RemoveCommand'])) {
            $model->removeCommandShrink = $map['RemoveCommand'];
        }

        return $model;
    }
}
