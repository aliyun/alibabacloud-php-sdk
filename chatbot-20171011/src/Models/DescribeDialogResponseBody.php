<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribeDialogResponseBody extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var bool
     */
    public $isOnline;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var bool
     */
    public $isSampleDialog;
    protected $_name = [
        'status'         => 'Status',
        'modifyTime'     => 'ModifyTime',
        'description'    => 'Description',
        'requestId'      => 'RequestId',
        'createTime'     => 'CreateTime',
        'createUserId'   => 'CreateUserId',
        'dialogId'       => 'DialogId',
        'createUserName' => 'CreateUserName',
        'isOnline'       => 'IsOnline',
        'dialogName'     => 'DialogName',
        'modifyUserId'   => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'isSampleDialog' => 'IsSampleDialog',
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
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->isOnline) {
            $res['IsOnline'] = $this->isOnline;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->isSampleDialog) {
            $res['IsSampleDialog'] = $this->isSampleDialog;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDialogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['IsOnline'])) {
            $model->isOnline = $map['IsOnline'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['IsSampleDialog'])) {
            $model->isSampleDialog = $map['IsSampleDialog'];
        }

        return $model;
    }
}
