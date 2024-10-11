<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\PausePhysicalNodeRequest\pauseCommand;
use AlibabaCloud\Tea\Model;

class PausePhysicalNodeRequest extends Model
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
     * @var pauseCommand
     */
    public $pauseCommand;
    protected $_name = [
        'env'          => 'Env',
        'opTenantId'   => 'OpTenantId',
        'pauseCommand' => 'PauseCommand',
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
        if (null !== $this->pauseCommand) {
            $res['PauseCommand'] = null !== $this->pauseCommand ? $this->pauseCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PausePhysicalNodeRequest
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
            $model->pauseCommand = pauseCommand::fromMap($map['PauseCommand']);
        }

        return $model;
    }
}
