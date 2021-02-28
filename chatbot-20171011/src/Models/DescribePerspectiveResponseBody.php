<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribePerspectiveResponseBody extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $perspectiveCode;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $selfDefine;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $perspectiveId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'status'          => 'Status',
        'perspectiveCode' => 'PerspectiveCode',
        'modifyTime'      => 'ModifyTime',
        'requestId'       => 'RequestId',
        'selfDefine'      => 'SelfDefine',
        'createTime'      => 'CreateTime',
        'modifyUserName'  => 'ModifyUserName',
        'perspectiveId'   => 'PerspectiveId',
        'createUserName'  => 'CreateUserName',
        'name'            => 'Name',
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
        if (null !== $this->perspectiveCode) {
            $res['PerspectiveCode'] = $this->perspectiveCode;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->selfDefine) {
            $res['SelfDefine'] = $this->selfDefine;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->perspectiveId) {
            $res['PerspectiveId'] = $this->perspectiveId;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePerspectiveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PerspectiveCode'])) {
            $model->perspectiveCode = $map['PerspectiveCode'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SelfDefine'])) {
            $model->selfDefine = $map['SelfDefine'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['PerspectiveId'])) {
            $model->perspectiveId = $map['PerspectiveId'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
