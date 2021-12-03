<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class RestOpenTaskOrderRequest extends Model
{
    /**
     * @description 主群关联Id
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description 任务单ID
     *
     * @var string
     */
    public $orderId;

    /**
     * @description 重开说明
     *
     * @var string
     */
    public $resetContent;

    /**
     * @description 重开类型
     *
     * @var string
     */
    public $resetType;

    /**
     * @description 操作人姓名
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'openGroupId'  => 'OpenGroupId',
        'orderId'      => 'OrderId',
        'resetContent' => 'ResetContent',
        'resetType'    => 'ResetType',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->resetContent) {
            $res['ResetContent'] = $this->resetContent;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestOpenTaskOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ResetContent'])) {
            $model->resetContent = $map['ResetContent'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
