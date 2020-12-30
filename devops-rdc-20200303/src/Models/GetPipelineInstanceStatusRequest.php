<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineInstanceStatusRequest extends Model
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
     * @var int
     */
    public $flowInstanceId;

    /**
     * @var string
     */
    public $userPk;
    protected $_name = [
        'orgId'          => 'OrgId',
        'pipelineId'     => 'PipelineId',
        'flowInstanceId' => 'FlowInstanceId',
        'userPk'         => 'UserPk',
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
        if (null !== $this->flowInstanceId) {
            $res['FlowInstanceId'] = $this->flowInstanceId;
        }
        if (null !== $this->userPk) {
            $res['UserPk'] = $this->userPk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineInstanceStatusRequest
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
        if (isset($map['FlowInstanceId'])) {
            $model->flowInstanceId = $map['FlowInstanceId'];
        }
        if (isset($map['UserPk'])) {
            $model->userPk = $map['UserPk'];
        }

        return $model;
    }
}
