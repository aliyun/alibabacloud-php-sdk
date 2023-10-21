<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventAttributeResponseBody\customEvents;

use AlibabaCloud\Tea\Model;

class customEvent extends Model
{
    /**
     * @description The content of the custom event.
     *
     * @example requestId:4975A6F3-19AC-4C01-BAD2-034DA07FEBB5, info:{"autoPay":false,"autoUseCoupon":false,"bid":"26842","buyerId":118935342242****,"commodities":[{"aliyunProduceCode":"cms","chargeType":"PREPAY","commodityCode":"cms_call_num","components":[{"componentCode":"phone_count","instanceProperty":[{"code":"phone_count","value":"500"}],"moduleAttrStatus":1}],"duration":6,"free":false,"orderParams":{"aliyunProduceCode":"cms"},"orderType":"BUY","prePayPostCharge":false,"pricingCycle":"Month","quantity":1,"refundSpecCode":"","renewChange":false,"specCode":"cms_call_num","specUpdate":false,"syncToSubscription":false,"upgradeInquireFinancialValue":true}],"fromApp":"commonbuy","orderParams":{"priceCheck":"true"},"payerId":118935342242****,"requestId":"ade3ad32-f58b-45d7-add4-ac542be3d8ec","skipChannel":false,"userId":118935342242****}
     *
     * @var string
     */
    public $content;

    /**
     * @description The ID of the application group.
     *
     * @example 12345
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the custom event.
     *
     * @example 123
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the custom event.
     *
     * @example BABEL_CHECK
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the custom event occurred.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1552199984000
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'content' => 'Content',
        'groupId' => 'GroupId',
        'id'      => 'Id',
        'name'    => 'Name',
        'time'    => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
