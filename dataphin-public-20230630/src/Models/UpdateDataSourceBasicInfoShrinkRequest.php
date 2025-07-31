<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataSourceBasicInfoShrinkRequest extends Model
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
    public $updateCommandShrink;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'updateCommandShrink' => 'UpdateCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->updateCommandShrink) {
            $res['UpdateCommand'] = $this->updateCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataSourceBasicInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['UpdateCommand'])) {
            $model->updateCommandShrink = $map['UpdateCommand'];
        }

        return $model;
    }
}
