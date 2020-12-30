<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dycdpapi\V20180610\Models\QueryCdpOfferByIdResponseBody\flowOffers;

use AlibabaCloud\Tea\Model;

class flowOffer extends Model
{
    /**
     * @var string
     */
    public $right;

    /**
     * @var string
     */
    public $useEff;

    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $useLimit;

    /**
     * @var string
     */
    public $useScene;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $grade;

    /**
     * @var int
     */
    public $offerId;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var string
     */
    public $discount;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'right'       => 'Right',
        'useEff'      => 'UseEff',
        'channelType' => 'ChannelType',
        'useLimit'    => 'UseLimit',
        'useScene'    => 'UseScene',
        'vendor'      => 'Vendor',
        'grade'       => 'Grade',
        'offerId'     => 'OfferId',
        'price'       => 'Price',
        'flowType'    => 'FlowType',
        'discount'    => 'Discount',
        'province'    => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->right) {
            $res['Right'] = $this->right;
        }
        if (null !== $this->useEff) {
            $res['UseEff'] = $this->useEff;
        }
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->useLimit) {
            $res['UseLimit'] = $this->useLimit;
        }
        if (null !== $this->useScene) {
            $res['UseScene'] = $this->useScene;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->grade) {
            $res['Grade'] = $this->grade;
        }
        if (null !== $this->offerId) {
            $res['OfferId'] = $this->offerId;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }
        if (null !== $this->discount) {
            $res['Discount'] = $this->discount;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowOffer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Right'])) {
            $model->right = $map['Right'];
        }
        if (isset($map['UseEff'])) {
            $model->useEff = $map['UseEff'];
        }
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['UseLimit'])) {
            $model->useLimit = $map['UseLimit'];
        }
        if (isset($map['UseScene'])) {
            $model->useScene = $map['UseScene'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['Grade'])) {
            $model->grade = $map['Grade'];
        }
        if (isset($map['OfferId'])) {
            $model->offerId = $map['OfferId'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }
        if (isset($map['Discount'])) {
            $model->discount = $map['Discount'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
