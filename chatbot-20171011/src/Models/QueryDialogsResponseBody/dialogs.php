<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryDialogsResponseBody;

use AlibabaCloud\Tea\Model;

class dialogs extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var bool
     */
    public $isOnline;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var bool
     */
    public $isSampleDialog;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'status'         => 'Status',
        'dialogName'     => 'DialogName',
        'modifyUserId'   => 'ModifyUserId',
        'isOnline'       => 'IsOnline',
        'createUserName' => 'CreateUserName',
        'createTime'     => 'CreateTime',
        'createUserId'   => 'CreateUserId',
        'modifyUserName' => 'ModifyUserName',
        'description'    => 'Description',
        'dialogId'       => 'DialogId',
        'isSampleDialog' => 'IsSampleDialog',
        'modifyTime'     => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->isOnline) {
            $res['IsOnline'] = $this->isOnline;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->isSampleDialog) {
            $res['IsSampleDialog'] = $this->isSampleDialog;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dialogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['IsOnline'])) {
            $model->isOnline = $map['IsOnline'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['IsSampleDialog'])) {
            $model->isSampleDialog = $map['IsSampleDialog'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
