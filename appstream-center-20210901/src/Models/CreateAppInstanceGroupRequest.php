<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\network;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\runtimePolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\securityPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\storagePolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\userDefinePolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\userInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest\videoPolicy;

class CreateAppInstanceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appCenterImageId;
    /**
     * @var string
     */
    public $appInstanceGroupName;
    /**
     * @var string
     */
    public $appPolicyId;
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
    public $chargeResourceMode;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var network
     */
    public $network;
    /**
     * @var nodePool
     */
    public $nodePool;
    /**
     * @var int
     */
    public $period;
    /**
     * @var string
     */
    public $periodUnit;
    /**
     * @var string
     */
    public $preOpenAppId;
    /**
     * @var string
     */
    public $productType;
    /**
     * @var string
     */
    public $promotionId;
    /**
     * @var runtimePolicy
     */
    public $runtimePolicy;
    /**
     * @var securityPolicy
     */
    public $securityPolicy;
    /**
     * @var int
     */
    public $sessionTimeout;
    /**
     * @var storagePolicy
     */
    public $storagePolicy;
    /**
     * @var userDefinePolicy
     */
    public $userDefinePolicy;
    /**
     * @var userInfo
     */
    public $userInfo;
    /**
     * @var string[]
     */
    public $users;
    /**
     * @var videoPolicy
     */
    public $videoPolicy;
    protected $_name = [
        'appCenterImageId'     => 'AppCenterImageId',
        'appInstanceGroupName' => 'AppInstanceGroupName',
        'appPolicyId'          => 'AppPolicyId',
        'autoPay'              => 'AutoPay',
        'autoRenew'            => 'AutoRenew',
        'bizRegionId'          => 'BizRegionId',
        'chargeResourceMode'   => 'ChargeResourceMode',
        'chargeType'           => 'ChargeType',
        'network'              => 'Network',
        'nodePool'             => 'NodePool',
        'period'               => 'Period',
        'periodUnit'           => 'PeriodUnit',
        'preOpenAppId'         => 'PreOpenAppId',
        'productType'          => 'ProductType',
        'promotionId'          => 'PromotionId',
        'runtimePolicy'        => 'RuntimePolicy',
        'securityPolicy'       => 'SecurityPolicy',
        'sessionTimeout'       => 'SessionTimeout',
        'storagePolicy'        => 'StoragePolicy',
        'userDefinePolicy'     => 'UserDefinePolicy',
        'userInfo'             => 'UserInfo',
        'users'                => 'Users',
        'videoPolicy'          => 'VideoPolicy',
    ];

    public function validate()
    {
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->nodePool) {
            $this->nodePool->validate();
        }
        if (null !== $this->runtimePolicy) {
            $this->runtimePolicy->validate();
        }
        if (null !== $this->securityPolicy) {
            $this->securityPolicy->validate();
        }
        if (null !== $this->storagePolicy) {
            $this->storagePolicy->validate();
        }
        if (null !== $this->userDefinePolicy) {
            $this->userDefinePolicy->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        if (null !== $this->videoPolicy) {
            $this->videoPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }

        if (null !== $this->appInstanceGroupName) {
            $res['AppInstanceGroupName'] = $this->appInstanceGroupName;
        }

        if (null !== $this->appPolicyId) {
            $res['AppPolicyId'] = $this->appPolicyId;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeResourceMode) {
            $res['ChargeResourceMode'] = $this->chargeResourceMode;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->nodePool) {
            $res['NodePool'] = null !== $this->nodePool ? $this->nodePool->toArray($noStream) : $this->nodePool;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->preOpenAppId) {
            $res['PreOpenAppId'] = $this->preOpenAppId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->runtimePolicy) {
            $res['RuntimePolicy'] = null !== $this->runtimePolicy ? $this->runtimePolicy->toArray($noStream) : $this->runtimePolicy;
        }

        if (null !== $this->securityPolicy) {
            $res['SecurityPolicy'] = null !== $this->securityPolicy ? $this->securityPolicy->toArray($noStream) : $this->securityPolicy;
        }

        if (null !== $this->sessionTimeout) {
            $res['SessionTimeout'] = $this->sessionTimeout;
        }

        if (null !== $this->storagePolicy) {
            $res['StoragePolicy'] = null !== $this->storagePolicy ? $this->storagePolicy->toArray($noStream) : $this->storagePolicy;
        }

        if (null !== $this->userDefinePolicy) {
            $res['UserDefinePolicy'] = null !== $this->userDefinePolicy ? $this->userDefinePolicy->toArray($noStream) : $this->userDefinePolicy;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1           = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->videoPolicy) {
            $res['VideoPolicy'] = null !== $this->videoPolicy ? $this->videoPolicy->toArray($noStream) : $this->videoPolicy;
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
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }

        if (isset($map['AppInstanceGroupName'])) {
            $model->appInstanceGroupName = $map['AppInstanceGroupName'];
        }

        if (isset($map['AppPolicyId'])) {
            $model->appPolicyId = $map['AppPolicyId'];
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeResourceMode'])) {
            $model->chargeResourceMode = $map['ChargeResourceMode'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['NodePool'])) {
            $model->nodePool = nodePool::fromMap($map['NodePool']);
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PreOpenAppId'])) {
            $model->preOpenAppId = $map['PreOpenAppId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['RuntimePolicy'])) {
            $model->runtimePolicy = runtimePolicy::fromMap($map['RuntimePolicy']);
        }

        if (isset($map['SecurityPolicy'])) {
            $model->securityPolicy = securityPolicy::fromMap($map['SecurityPolicy']);
        }

        if (isset($map['SessionTimeout'])) {
            $model->sessionTimeout = $map['SessionTimeout'];
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicy = storagePolicy::fromMap($map['StoragePolicy']);
        }

        if (isset($map['UserDefinePolicy'])) {
            $model->userDefinePolicy = userDefinePolicy::fromMap($map['UserDefinePolicy']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1           = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VideoPolicy'])) {
            $model->videoPolicy = videoPolicy::fromMap($map['VideoPolicy']);
        }

        return $model;
    }
}
