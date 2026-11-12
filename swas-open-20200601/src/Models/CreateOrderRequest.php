<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest\businessInfo;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest\commodity;

class CreateOrderRequest extends Model
{
    /**
     * @var businessInfo
     */
    public $businessInfo;

    /**
     * @var commodity
     */
    public $commodity;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $fromApp;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'businessInfo' => 'BusinessInfo',
        'commodity' => 'Commodity',
        'couponNo' => 'CouponNo',
        'fromApp' => 'FromApp',
        'orderType' => 'OrderType',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->businessInfo) {
            $this->businessInfo->validate();
        }
        if (null !== $this->commodity) {
            $this->commodity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = null !== $this->businessInfo ? $this->businessInfo->toArray($noStream) : $this->businessInfo;
        }

        if (null !== $this->commodity) {
            $res['Commodity'] = null !== $this->commodity ? $this->commodity->toArray($noStream) : $this->commodity;
        }

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->fromApp) {
            $res['FromApp'] = $this->fromApp;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = businessInfo::fromMap($map['BusinessInfo']);
        }

        if (isset($map['Commodity'])) {
            $model->commodity = commodity::fromMap($map['Commodity']);
        }

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['FromApp'])) {
            $model->fromApp = $map['FromApp'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
