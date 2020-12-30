<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class DeletePipelineMemberRequest extends Model
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
     * @var string
     */
    public $userId;
    protected $_name = [
        'orgId'      => 'OrgId',
        'pipelineId' => 'PipelineId',
        'userPk'     => 'UserPk',
        'userId'     => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePipelineMemberRequest
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
