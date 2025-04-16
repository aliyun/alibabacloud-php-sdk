<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class Task extends Model
{
    /**
     * @var Action[]
     */
    public $actions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtActivatedTime;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $gmtStoppedTime;

    /**
     * @var string
     */
    public $quotaId;

    /**
     * @var Rules
     */
    public $rules;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'actions' => 'Actions',
        'description' => 'Description',
        'gmtActivatedTime' => 'GmtActivatedTime',
        'gmtCreatedTime' => 'GmtCreatedTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtStoppedTime' => 'GmtStoppedTime',
        'quotaId' => 'QuotaId',
        'rules' => 'Rules',
        'status' => 'Status',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'userId' => 'UserId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->actions)) {
            Model::validateArray($this->actions);
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actions) {
            if (\is_array($this->actions)) {
                $res['Actions'] = [];
                $n1 = 0;
                foreach ($this->actions as $item1) {
                    $res['Actions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtActivatedTime) {
            $res['GmtActivatedTime'] = $this->gmtActivatedTime;
        }

        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->gmtStoppedTime) {
            $res['GmtStoppedTime'] = $this->gmtStoppedTime;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Actions'])) {
            if (!empty($map['Actions'])) {
                $model->actions = [];
                $n1 = 0;
                foreach ($map['Actions'] as $item1) {
                    $model->actions[$n1++] = Action::fromMap($item1);
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtActivatedTime'])) {
            $model->gmtActivatedTime = $map['GmtActivatedTime'];
        }

        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['GmtStoppedTime'])) {
            $model->gmtStoppedTime = $map['GmtStoppedTime'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['Rules'])) {
            $model->rules = Rules::fromMap($map['Rules']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
