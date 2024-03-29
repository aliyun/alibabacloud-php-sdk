<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\QueryPerspectivesResponseBody;

use AlibabaCloud\Tea\Model;

class perspectives extends Model
{
    /**
     * @example 2022-04-12T06:30:17Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-04-29T03:38:54Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 移动端视角
     *
     * @var string
     */
    public $name;

    /**
     * @example FZJBY3raWr
     *
     * @var string
     */
    public $perspectiveCode;

    /**
     * @example 3001
     *
     * @var string
     */
    public $perspectiveId;

    /**
     * @example true
     *
     * @var bool
     */
    public $selfDefine;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'modifyTime'      => 'ModifyTime',
        'name'            => 'Name',
        'perspectiveCode' => 'PerspectiveCode',
        'perspectiveId'   => 'PerspectiveId',
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
     * @return perspectives
     */
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
        if (isset($map['SelfDefine'])) {
            $model->selfDefine = $map['SelfDefine'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
