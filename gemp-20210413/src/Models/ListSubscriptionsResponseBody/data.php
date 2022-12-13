<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponseBody\data\notifyObjectList;
use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSubscriptionsResponseBody\data\scopeObjectList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2022-05-09 10:10:10
     *
     * @var string
     */
    public $endTime;

    /**
     * @example LONG_TERM
     *
     * @var string
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
     * @example 2020-05-09 10:10:10
     *
     * @var string
     */
    public $startTime;

    /**
     * @example ENABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example 10
     *
     * @var int
     */
    public $subscriptionId;

    /**
     * @example test
     *
     * @var string
     */
    public $subscriptionTitle;
    protected $_name = [
        'endTime'           => 'endTime',
        'expiredType'       => 'expiredType',
        'notifyObjectList'  => 'notifyObjectList',
        'notifyObjectType'  => 'notifyObjectType',
        'scope'             => 'scope',
        'scopeObjectList'   => 'scopeObjectList',
        'startTime'         => 'startTime',
        'status'            => 'status',
        'subscriptionId'    => 'subscriptionId',
        'subscriptionTitle' => 'subscriptionTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }
        if (null !== $this->subscriptionTitle) {
            $res['subscriptionTitle'] = $this->subscriptionTitle;
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
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }
        if (isset($map['subscriptionTitle'])) {
            $model->subscriptionTitle = $map['subscriptionTitle'];
        }

        return $model;
    }
}
