<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class CreateNodeSupplementShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $createCommandShrink;

    /**
     * @example DEV/PROD
     *
     * @var string
     */
    public $env;

    /**
     * @description This parameter is required.
     *
     * @example 30001011
     *
     * @var int
     */
    public $opTenantId;
    protected $_name = [
        'createCommandShrink' => 'CreateCommand',
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createCommandShrink) {
            $res['CreateCommand'] = $this->createCommandShrink;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodeSupplementShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateCommand'])) {
            $model->createCommandShrink = $map['CreateCommand'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        return $model;
    }
}
