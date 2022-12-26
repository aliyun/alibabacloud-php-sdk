<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class DescribePerspectiveResponseBody extends Model
{
    /**
     * @example 2021-07-27T07:05:37Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2021-07-26T07:05:37Z
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
     * @example F285D735-D580-18A8-B97F-B2E72B00F101
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
