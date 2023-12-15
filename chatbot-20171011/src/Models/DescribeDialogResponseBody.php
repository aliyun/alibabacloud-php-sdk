<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribeDialogResponseBody extends Model
{
    /**
     * @example 2020-11-30T03:00:54Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 83225
     *
     * @var string
     */
    public $createUserId;

    /**
     * @example null
     *
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 50099
     *
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOnline;

    /**
     * @example false
     *
     * @var bool
     */
    public $isSampleDialog;

    /**
     * @example 2020-11-30T06:05:11Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 83225
     *
     * @var string
     */
    public $modifyUserId;

    /**
     * @example null
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @example F178F903-AFCF-4F1F-81A1-69A8D99B1D7E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 6
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'createUserId'   => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'description'    => 'Description',
        'dialogId'       => 'DialogId',
        'dialogName'     => 'DialogName',
        'isOnline'       => 'IsOnline',
        'isSampleDialog' => 'IsSampleDialog',
        'modifyTime'     => 'ModifyTime',
        'modifyUserId'   => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->isOnline) {
            $res['IsOnline'] = $this->isOnline;
        }
        if (null !== $this->isSampleDialog) {
            $res['IsSampleDialog'] = $this->isSampleDialog;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['IsOnline'])) {
            $model->isOnline = $map['IsOnline'];
        }
        if (isset($map['IsSampleDialog'])) {
            $model->isSampleDialog = $map['IsSampleDialog'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
