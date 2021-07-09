<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class UpdatePipelineEnvVarsRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @description 流水线id
     *
     * @var int
     */
    public $pipelineId;

    /**
     * @description 需要修改的环境变量和默认值，json形式
     *
     * @var string
     */
    public $envVars;
    protected $_name = [
        'orgId'      => 'OrgId',
        'pipelineId' => 'PipelineId',
        'envVars'    => 'EnvVars',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->envVars) {
            $res['EnvVars'] = $this->envVars;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePipelineEnvVarsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['EnvVars'])) {
            $model->envVars = $map['EnvVars'];
        }

        return $model;
    }
}
