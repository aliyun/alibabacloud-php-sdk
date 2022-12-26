<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $bizTypeList;

    /**
     * @example 2021-09-11T09:26:14Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 9052
     *
     * @var int
     */
    public $createUserId;

    /**
     * @example xuqiang_test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $error;

    /**
     * @example 8521
     *
     * @var int
     */
    public $id;

    /**
     * @example 5CBF0581-EAE7-1DC4-95C6-A089656A1E2D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 8521
     *
     * @var int
     */
    public $response;

    /**
     * @example FE_RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizTypeList'    => 'BizTypeList',
        'createTime'     => 'CreateTime',
        'createUserId'   => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'error'          => 'Error',
        'id'             => 'Id',
        'requestId'      => 'RequestId',
        'response'       => 'Response',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeList) {
            $res['BizTypeList'] = $this->bizTypeList;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = $map['BizTypeList'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
