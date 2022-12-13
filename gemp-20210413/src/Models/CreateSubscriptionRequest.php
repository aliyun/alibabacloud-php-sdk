<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyObjectList;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\notifyStrategyList;
use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateSubscriptionRequest\scopeObjectList;
use AlibabaCloud\Tea\Model;

class CreateSubscriptionRequest extends Model
{
    /**
     * @example 601FA6A2-AC5C-4B59-BE11-378FTOKENA11
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2021-11-03 10:10:10
     *
     * @var string
     */
    public $endTime;

    /**
     * @example LONG_TERM
     *
     * @var int
     */
    public $expiredType;

    /**
     * @var notifyObjectList[]
     */
    public $notifyObjectList;

    /**
     * @example USER
     *
     * @var int
     */
    public $notifyObjectType;

    /**
     * @var notifyStrategyList[]
     */
    public $notifyStrategyList;

    /**
     * @example 1个月
     *
     * @var string
     */
    public $period;

    /**
     * @example SERVICE
     *
     * @var int
     */
    public $scope;

    /**
     * @var scopeObjectList[]
     */
    public $scopeObjectList;

    /**
     * @example 2021-02-03 10:10:10
     *
     * @var string
     */
    public $startTime;

    /**
     * @example testSubscription
     *
     * @var string
     */
    public $subscriptionTitle;
    protected $_name = [
        'clientToken'        => 'clientToken',
        'endTime'            => 'endTime',
        'expiredType'        => 'expiredType',
        'notifyObjectList'   => 'notifyObjectList',
        'notifyObjectType'   => 'notifyObjectType',
        'notifyStrategyList' => 'notifyStrategyList',
        'period'             => 'period',
        'scope'              => 'scope',
        'scopeObjectList'    => 'scopeObjectList',
        'startTime'          => 'startTime',
        'subscriptionTitle'  => 'subscriptionTitle',
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
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->expiredType) {
            $res['expiredType'] = $this->expiredType;
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
        if (null !== $this->notifyObjectType) {
            $res['notifyObjectType'] = $this->notifyObjectType;
        }
        if (null !== $this->notifyStrategyList) {
            $res['notifyStrategyList'] = [];
            if (null !== $this->notifyStrategyList && \is_array($this->notifyStrategyList)) {
                $n = 0;
                foreach ($this->notifyStrategyList as $item) {
                    $res['notifyStrategyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
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
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->subscriptionTitle) {
            $res['subscriptionTitle'] = $this->subscriptionTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['expiredType'])) {
            $model->expiredType = $map['expiredType'];
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
        if (isset($map['notifyObjectType'])) {
            $model->notifyObjectType = $map['notifyObjectType'];
        }
        if (isset($map['notifyStrategyList'])) {
            if (!empty($map['notifyStrategyList'])) {
                $model->notifyStrategyList = [];
                $n                         = 0;
                foreach ($map['notifyStrategyList'] as $item) {
                    $model->notifyStrategyList[$n++] = null !== $item ? notifyStrategyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
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
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['subscriptionTitle'])) {
            $model->subscriptionTitle = $map['subscriptionTitle'];
        }

        return $model;
    }
}
