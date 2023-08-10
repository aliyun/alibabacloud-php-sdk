<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSubscriptionInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeSubscriptionInstancesRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The **ClientToken** parameter can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than **0** and does not exceed the maximum value of the Integer data type. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page. Valid values: **30**, **50**, and **100**. Default value: **30**.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region where the change tracking instance resides. For more information, see [List of supported regions](~~49442~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the change tracking instance.
     *
     * >  If you specify this parameter, DTS returns all the change tracking instances that match the specified name.
     * @var string
     */
    public $subscriptionInstanceName;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'accountId'                => 'AccountId',
        'clientToken'              => 'ClientToken',
        'ownerId'                  => 'OwnerId',
        'pageNum'                  => 'PageNum',
        'pageSize'                 => 'PageSize',
        'regionId'                 => 'RegionId',
        'subscriptionInstanceName' => 'SubscriptionInstanceName',
        'tag'                      => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subscriptionInstanceName) {
            $res['SubscriptionInstanceName'] = $this->subscriptionInstanceName;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubscriptionInstanceName'])) {
            $model->subscriptionInstanceName = $map['SubscriptionInstanceName'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
