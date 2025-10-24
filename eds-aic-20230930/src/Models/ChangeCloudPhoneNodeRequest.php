<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ChangeCloudPhoneNodeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $displayConfig;

    /**
     * @var int
     */
    public $downBandwidthLimit;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $phoneCount;

    /**
     * @var int
     */
    public $phoneDataVolume;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var int
     */
    public $shareDataVolume;

    /**
     * @var int
     */
    public $swapSize;

    /**
     * @var int
     */
    public $upBandwidthLimit;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'displayConfig' => 'DisplayConfig',
        'downBandwidthLimit' => 'DownBandwidthLimit',
        'instanceType' => 'InstanceType',
        'nodeId' => 'NodeId',
        'phoneCount' => 'PhoneCount',
        'phoneDataVolume' => 'PhoneDataVolume',
        'promotionId' => 'PromotionId',
        'shareDataVolume' => 'ShareDataVolume',
        'swapSize' => 'SwapSize',
        'upBandwidthLimit' => 'UpBandwidthLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = $this->displayConfig;
        }

        if (null !== $this->downBandwidthLimit) {
            $res['DownBandwidthLimit'] = $this->downBandwidthLimit;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }

        if (null !== $this->phoneDataVolume) {
            $res['PhoneDataVolume'] = $this->phoneDataVolume;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->shareDataVolume) {
            $res['ShareDataVolume'] = $this->shareDataVolume;
        }

        if (null !== $this->swapSize) {
            $res['SwapSize'] = $this->swapSize;
        }

        if (null !== $this->upBandwidthLimit) {
            $res['UpBandwidthLimit'] = $this->upBandwidthLimit;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = $map['DisplayConfig'];
        }

        if (isset($map['DownBandwidthLimit'])) {
            $model->downBandwidthLimit = $map['DownBandwidthLimit'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }

        if (isset($map['PhoneDataVolume'])) {
            $model->phoneDataVolume = $map['PhoneDataVolume'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['ShareDataVolume'])) {
            $model->shareDataVolume = $map['ShareDataVolume'];
        }

        if (isset($map['SwapSize'])) {
            $model->swapSize = $map['SwapSize'];
        }

        if (isset($map['UpBandwidthLimit'])) {
            $model->upBandwidthLimit = $map['UpBandwidthLimit'];
        }

        return $model;
    }
}
