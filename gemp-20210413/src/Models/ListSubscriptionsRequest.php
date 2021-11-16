<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListSubscriptionsRequest extends Model
{
    /**
     * @description 幂等参数
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 通知对象名
     *
     * @var string
     */
    public $notifyObject;

    /**
     * @description 通知对象类型notifyWhoType:0服务组 1个人
     *
     * @var string
     */
    public $notifyObjectType;

    /**
     * @description 第几页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 一页几条
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 订阅范围类型 0全部1服务2流转规则
     *
     * @var string
     */
    public $scope;

    /**
     * @description 订阅范围对象名称
     *
     * @var string
     */
    public $scopeObject;

    /**
     * @description 通知订阅名
     *
     * @var string
     */
    public $subscriptionTitle;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'notifyObject'      => 'notifyObject',
        'notifyObjectType'  => 'notifyObjectType',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
        'scope'             => 'scope',
        'scopeObject'       => 'scopeObject',
        'subscriptionTitle' => 'subscriptionTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->notifyObject) {
            $res['notifyObject'] = $this->notifyObject;
        }
        if (null !== $this->notifyObjectType) {
            $res['notifyObjectType'] = $this->notifyObjectType;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->scopeObject) {
            $res['scopeObject'] = $this->scopeObject;
        }
        if (null !== $this->subscriptionTitle) {
            $res['subscriptionTitle'] = $this->subscriptionTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubscriptionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['notifyObject'])) {
            $model->notifyObject = $map['notifyObject'];
        }
        if (isset($map['notifyObjectType'])) {
            $model->notifyObjectType = $map['notifyObjectType'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['scopeObject'])) {
            $model->scopeObject = $map['scopeObject'];
        }
        if (isset($map['subscriptionTitle'])) {
            $model->subscriptionTitle = $map['subscriptionTitle'];
        }

        return $model;
    }
}
