<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\displayConfig;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeRequest\tag;

class CreateCloudPhoneNodeRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $count;

    /**
     * @var displayConfig
     */
    public $displayConfig;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $phoneCount;

    /**
     * @var int
     */
    public $resolutionHeight;

    /**
     * @var int
     */
    public $resolutionWidth;

    /**
     * @var int
     */
    public $serverShareDataVolume;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'count' => 'Count',
        'displayConfig' => 'DisplayConfig',
        'imageId' => 'ImageId',
        'instanceType' => 'InstanceType',
        'networkId' => 'NetworkId',
        'nodeName' => 'NodeName',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'phoneCount' => 'PhoneCount',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
        'serverShareDataVolume' => 'ServerShareDataVolume',
        'serverType' => 'ServerType',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->displayConfig) {
            $this->displayConfig->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = null !== $this->displayConfig ? $this->displayConfig->toArray($noStream) : $this->displayConfig;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }

        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }

        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }

        if (null !== $this->serverShareDataVolume) {
            $res['ServerShareDataVolume'] = $this->serverShareDataVolume;
        }

        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = displayConfig::fromMap($map['DisplayConfig']);
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }

        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }

        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }

        if (isset($map['ServerShareDataVolume'])) {
            $model->serverShareDataVolume = $map['ServerShareDataVolume'];
        }

        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
