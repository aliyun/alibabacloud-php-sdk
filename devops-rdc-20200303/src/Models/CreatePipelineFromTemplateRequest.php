<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelineFromTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @description 流水线模板的ID，可通过GetPipelineTemplates获取到该信息
     *
     * @var int
     */
    public $pipelineTemplateId;

    /**
     * @description 流水线名称
     *
     * @var string
     */
    public $pipelineName;
    protected $_name = [
        'orgId'              => 'OrgId',
        'pipelineTemplateId' => 'PipelineTemplateId',
        'pipelineName'       => 'PipelineName',
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
        if (null !== $this->pipelineTemplateId) {
            $res['PipelineTemplateId'] = $this->pipelineTemplateId;
        }
        if (null !== $this->pipelineName) {
            $res['PipelineName'] = $this->pipelineName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelineFromTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['PipelineTemplateId'])) {
            $model->pipelineTemplateId = $map['PipelineTemplateId'];
        }
        if (isset($map['PipelineName'])) {
            $model->pipelineName = $map['PipelineName'];
        }

        return $model;
    }
}
