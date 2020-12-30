<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes\workflowNode\auditUsers;

use AlibabaCloud\Tea\Model;

class auditUser extends Model
{
    /**
     * @var string
     */
    public $realName;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $nickName;
    protected $_name = [
        'realName' => 'RealName',
        'userId'   => 'UserId',
        'nickName' => 'NickName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->realName) {
            $res['RealName'] = $this->realName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
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
        if (isset($map['RealName'])) {
            $model->realName = $map['RealName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        return $model;
    }
}
