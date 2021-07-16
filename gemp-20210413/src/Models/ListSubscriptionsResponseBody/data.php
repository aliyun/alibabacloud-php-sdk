<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponseBody\data\notifyObjectList;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponseBody\data\scopeObjectList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 订阅id
     *
     * @var int
     */
    public $subscriptionId;

    /**
     * @description 通知订阅名称
     *
     * @var string
     */
    public $subscriptionTitle;

    /**
     * @description 0 全部 1服务 2 流转规则
     *
     * @var int
     */
    public $scope;

    /**
     * @description 0服务组 1个人
     *
     * @var int
     */
    public $notifyObjectType;

    /**
     * @description 有效期类型 0 长期 1短期
     *
     * @var string
     */
    public $expiredType;

    /**
     * @description 时效开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 时效结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description ENABLE 启用 DISABLE禁用
     *
     * @var string
     */
    public $status;

    /**
     * @description 订阅范围列表
     *
     * @var scopeObjectList[]
     */
    public $scopeObjectList;

    /**
     * @description 通知对象列表
     *
     * @var notifyObjectList[]
     */
    public $notifyObjectList;
    protected $_name = [
        'subscriptionId'    => 'subscriptionId',
        'subscriptionTitle' => 'subscriptionTitle',
        'scope'             => 'scope',
        'notifyObjectType'  => 'notifyObjectType',
        'expiredType'       => 'expiredType',
        'startTime'         => 'startTime',
        'endTime'           => 'endTime',
        'status'            => 'status',
        'scopeObjectList'   => 'scopeObjectList',
        'notifyObjectList'  => 'notifyObjectList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }
        if (null !== $this->subscriptionTitle) {
            $res['subscriptionTitle'] = $this->subscriptionTitle;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->notifyObjectType) {
            $res['notifyObjectType'] = $this->notifyObjectType;
        }
        if (null !== $this->expiredType) {
            $res['expiredType'] = $this->expiredType;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->scopeObjectList) {
            $res['scopeObjectList'] = [];
            if (null !== $this->scopeObjectList && \is_array($this->scopeObjectList)) {
                $n = 0;
                foreach ($this->scopeObjectList as $item) {
                    $res['scopeObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notifyObjectList) {
            $res['notifyObjectList'] = [];
            if (null !== $this->notifyObjectList && \is_array($this->notifyObjectList)) {
                $n = 0;
                foreach ($this->notifyObjectList as $item) {
                    $res['notifyObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }
        if (isset($map['subscriptionTitle'])) {
            $model->subscriptionTitle = $map['subscriptionTitle'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['notifyObjectType'])) {
            $model->notifyObjectType = $map['notifyObjectType'];
        }
        if (isset($map['expiredType'])) {
            $model->expiredType = $map['expiredType'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['scopeObjectList'])) {
            if (!empty($map['scopeObjectList'])) {
                $model->scopeObjectList = [];
                $n                      = 0;
                foreach ($map['scopeObjectList'] as $item) {
                    $model->scopeObjectList[$n++] = null !== $item ? scopeObjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['notifyObjectList'])) {
            if (!empty($map['notifyObjectList'])) {
                $model->notifyObjectList = [];
                $n                       = 0;
                foreach ($map['notifyObjectList'] as $item) {
                    $model->notifyObjectList[$n++] = null !== $item ? notifyObjectList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
