<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class AddTenantMembersBySourceUserShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addCommandShrink;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'addCommandShrink' => 'AddCommand',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addCommandShrink) {
            $res['AddCommand'] = $this->addCommandShrink;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTenantMembersBySourceUserShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddCommand'])) {
            $model->addCommandShrink = $map['AddCommand'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
