<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class TransferPipelineOwnerRequest extends Model
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
    public $newOwnerId;
    protected $_name = [
        'orgId'      => 'OrgId',
        'pipelineId' => 'PipelineId',
        'userPk'     => 'UserPk',
        'newOwnerId' => 'NewOwnerId',
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
        if (null !== $this->newOwnerId) {
            $res['NewOwnerId'] = $this->newOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferPipelineOwnerRequest
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
        if (isset($map['NewOwnerId'])) {
            $model->newOwnerId = $map['NewOwnerId'];
        }

        return $model;
    }
}
