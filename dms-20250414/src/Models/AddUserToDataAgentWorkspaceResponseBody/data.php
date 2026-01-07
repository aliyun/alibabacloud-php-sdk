<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\AddUserToDataAgentWorkspaceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $joinTime;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var int
     */
    public $runningTaskNumber;

    /**
     * @var int
     */
    public $totalTaskNumber;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'joinTime' => 'JoinTime',
        'memberId' => 'MemberId',
        'roleName' => 'RoleName',
        'runningTaskNumber' => 'RunningTaskNumber',
        'totalTaskNumber' => 'TotalTaskNumber',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->joinTime) {
            $res['JoinTime'] = $this->joinTime;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        if (null !== $this->runningTaskNumber) {
            $res['RunningTaskNumber'] = $this->runningTaskNumber;
        }

        if (null !== $this->totalTaskNumber) {
            $res['TotalTaskNumber'] = $this->totalTaskNumber;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JoinTime'])) {
            $model->joinTime = $map['JoinTime'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        if (isset($map['RunningTaskNumber'])) {
            $model->runningTaskNumber = $map['RunningTaskNumber'];
        }

        if (isset($map['TotalTaskNumber'])) {
            $model->totalTaskNumber = $map['TotalTaskNumber'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
