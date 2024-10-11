<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Tea\Model;

class PausePhysicalNodeShrinkRequest extends Model
{
    /**
     * @example PROD
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

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $pauseCommandShrink;
    protected $_name = [
        'env'                => 'Env',
        'opTenantId'         => 'OpTenantId',
        'pauseCommandShrink' => 'PauseCommand',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->pauseCommandShrink) {
            $res['PauseCommand'] = $this->pauseCommandShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PausePhysicalNodeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }
        if (isset($map['PauseCommand'])) {
            $model->pauseCommandShrink = $map['PauseCommand'];
        }

        return $model;
    }
}
