<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class DescribePerspectiveResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $perspectiveCode;

    /**
     * @var string
     */
    public $perspectiveId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $selfDefine;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'perspectiveCode' => 'PerspectiveCode',
        'perspectiveId' => 'PerspectiveId',
        'requestId' => 'RequestId',
        'selfDefine' => 'SelfDefine',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
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
