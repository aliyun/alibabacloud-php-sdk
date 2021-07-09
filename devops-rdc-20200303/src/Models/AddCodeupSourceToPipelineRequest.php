<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class AddCodeupSourceToPipelineRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @description 流水线ID
     *
     * @var int
     */
    public $pipelineId;

    /**
     * @description Codeup的代码库路径，比如 group1/repo1
     *
     * @var string
     */
    public $codePath;

    /**
     * @description 代码库分支
     *
     * @var string
     */
    public $codeBranch;
    protected $_name = [
        'orgId'      => 'OrgId',
        'pipelineId' => 'PipelineId',
        'codePath'   => 'CodePath',
        'codeBranch' => 'CodeBranch',
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
        if (null !== $this->codePath) {
            $res['CodePath'] = $this->codePath;
        }
        if (null !== $this->codeBranch) {
            $res['CodeBranch'] = $this->codeBranch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCodeupSourceToPipelineRequest
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
        if (isset($map['CodePath'])) {
            $model->codePath = $map['CodePath'];
        }
        if (isset($map['CodeBranch'])) {
            $model->codeBranch = $map['CodeBranch'];
        }

        return $model;
    }
}
