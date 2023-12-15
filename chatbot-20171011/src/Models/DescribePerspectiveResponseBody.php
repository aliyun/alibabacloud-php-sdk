<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribePerspectiveResponseBody extends Model
{
    /**
     * @example 2020-11-25T08:26:06Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $createUserName;

    /**
     * @example 2020-11-25T08:56:55Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example test
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @example 12
     *
     * @var string
     */
    public $name;

    /**
     * @example 6IReUnbyzb
     *
     * @var string
     */
    public $perspectiveCode;

    /**
     * @example 7487
     *
     * @var string
     */
    public $perspectiveId;

    /**
     * @example DFB71B34-4188-4EA2-9988-EF3014E75910
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $selfDefine;

    /**
     * @example 3
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createUserName'  => 'CreateUserName',
        'modifyTime'      => 'ModifyTime',
        'modifyUserName'  => 'ModifyUserName',
        'name'            => 'Name',
        'perspectiveCode' => 'PerspectiveCode',
        'perspectiveId'   => 'PerspectiveId',
        'requestId'       => 'RequestId',
        'selfDefine'      => 'SelfDefine',
        'status'          => 'Status',
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
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->perspectiveCode) {
            $res['PerspectiveCode'] = $this->perspectiveCode;
        }
        if (null !== $this->perspectiveId) {
            $res['PerspectiveId'] = $this->perspectiveId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->selfDefine) {
            $res['SelfDefine'] = $this->selfDefine;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PerspectiveCode'])) {
            $model->perspectiveCode = $map['PerspectiveCode'];
        }
        if (isset($map['PerspectiveId'])) {
            $model->perspectiveId = $map['PerspectiveId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SelfDefine'])) {
            $model->selfDefine = $map['SelfDefine'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
