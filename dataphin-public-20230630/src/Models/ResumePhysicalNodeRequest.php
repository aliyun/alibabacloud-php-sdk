<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ResumePhysicalNodeRequest\resumeCommand;
use AlibabaCloud\Tea\Model;

class ResumePhysicalNodeRequest extends Model
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
     * @var resumeCommand
     */
    public $resumeCommand;
    protected $_name = [
        'env' => 'Env',
        'opTenantId' => 'OpTenantId',
        'resumeCommand' => 'ResumeCommand',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }
        if (null !== $this->resumeCommand) {
            $res['ResumeCommand'] = null !== $this->resumeCommand ? $this->resumeCommand->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResumePhysicalNodeRequest
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
        if (isset($map['ResumeCommand'])) {
            $model->resumeCommand = resumeCommand::fromMap($map['ResumeCommand']);
        }

        return $model;
    }
}
