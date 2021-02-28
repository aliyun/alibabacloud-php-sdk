<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryPerspectivesResponseBody;

use AlibabaCloud\Tea\Model;

class perspectives extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $modifyUserName;

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
    public $perspectiveId;

    /**
     * @var string
     */
    public $selfDefine;

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
    public $modifyTime;
    protected $_name = [
        'status'          => 'Status',
        'modifyUserName'  => 'ModifyUserName',
        'createUserName'  => 'CreateUserName',
        'createTime'      => 'CreateTime',
        'perspectiveId'   => 'PerspectiveId',
        'selfDefine'      => 'SelfDefine',
        'name'            => 'Name',
        'perspectiveCode' => 'PerspectiveCode',
        'modifyTime'      => 'ModifyTime',
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
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->perspectiveId) {
            $res['PerspectiveId'] = $this->perspectiveId;
        }
        if (null !== $this->selfDefine) {
            $res['SelfDefine'] = $this->selfDefine;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->perspectiveCode) {
            $res['PerspectiveCode'] = $this->perspectiveCode;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return perspectives
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['PerspectiveId'])) {
            $model->perspectiveId = $map['PerspectiveId'];
        }
        if (isset($map['SelfDefine'])) {
            $model->selfDefine = $map['SelfDefine'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PerspectiveCode'])) {
            $model->perspectiveCode = $map['PerspectiveCode'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
