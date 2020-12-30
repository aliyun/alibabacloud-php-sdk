<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineInstanceGroupStatusRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $userPk;

    /**
     * @var int
     */
    public $flowInstanceId;
    protected $_name = [
        'orgId'          => 'OrgId',
        'pipelineId'     => 'PipelineId',
        'userPk'         => 'UserPk',
        'flowInstanceId' => 'FlowInstanceId',
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
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineInstanceGroupStatusRequest
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
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }

        return $model;
    }
}
