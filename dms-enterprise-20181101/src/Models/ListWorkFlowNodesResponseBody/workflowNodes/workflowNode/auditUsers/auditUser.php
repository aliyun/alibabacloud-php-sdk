<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes\workflowNode\auditUsers;

use AlibabaCloud\Tea\Model;

class auditUser extends Model
{
    /**
     * @description The nickname of the approver.
     *
     * @example test
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The real name of the approver.
     *
     * @example test
     *
     * @var string
     */
    public $realName;

    /**
     * @description The ID of the approver. The ID is different from the ID of the Alibaba Cloud account of the approver.
     *
     * @example 123
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'nickName' => 'NickName',
        'realName' => 'RealName',
        'userId'   => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditUser
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
