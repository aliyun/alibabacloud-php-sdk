<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAclChecksResponseBody\checkRecords;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $aclPendingCount;

    /**
     * @var int
     */
    public $aclTotalCount;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var string
     */
    public $lastCheckTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'aclPendingCount' => 'AclPendingCount',
        'aclTotalCount' => 'AclTotalCount',
        'checkName' => 'CheckName',
        'checkStatus' => 'CheckStatus',
        'checkType' => 'CheckType',
        'lastCheckTime' => 'LastCheckTime',
        'level' => 'Level',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclPendingCount) {
            $res['AclPendingCount'] = $this->aclPendingCount;
        }

        if (null !== $this->aclTotalCount) {
            $res['AclTotalCount'] = $this->aclTotalCount;
        }

        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->lastCheckTime) {
            $res['LastCheckTime'] = $this->lastCheckTime;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AclPendingCount'])) {
            $model->aclPendingCount = $map['AclPendingCount'];
        }

        if (isset($map['AclTotalCount'])) {
            $model->aclTotalCount = $map['AclTotalCount'];
        }

        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['LastCheckTime'])) {
            $model->lastCheckTime = $map['LastCheckTime'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
