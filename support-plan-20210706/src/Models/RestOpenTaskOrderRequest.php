<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class RestOpenTaskOrderRequest extends Model
{
    /**
     * @example cidXcezGVQJjiWy2PzXylGwvg==
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description This parameter is required.
     *
     * @example E21111796147LE
     *
     * @var string
     */
    public $orderId;

    /**
     * @example 重开补充说明
     *
     * @var string
     */
    public $resetContent;

    /**
     * @example 枚举值：6:解决方案无效；7:当前问题仍有疑问需要咨询；8:问题重复出现
     *
     * @var string
     */
    public $resetType;

    /**
     * @example 操作人姓名
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
