<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\browserConfig;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\network;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\policy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\securityPolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\storagePolicy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\tag;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\timers;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\userInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\users;

class CreateBrowserInstanceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appPackageType;

    /**
     * @var bool
     */
    public $authNotificationEnabled;

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
     * @var browserConfig
     */
    public $browserConfig;

    /**
     * @var string
     */
    public $chargeResourceMode;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cloudBrowserName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $maxAmount;

    /**
     * @var network
     */
    public $network;

    /**
     * @var nodePool
     */
    public $nodePool;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var securityPolicy
     */
    public $securityPolicy;

    /**
     * @var storagePolicy
     */
    public $storagePolicy;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var timers[]
     */
    public $timers;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var userInfo
     */
    public $userInfo;

    /**
     * @var users[]
     */
    public $users;
    protected $_name = [
        'appPackageType' => 'AppPackageType',
        'authNotificationEnabled' => 'AuthNotificationEnabled',
        'autoPay' => 'AutoPay',
        'autoRenew' => 'AutoRenew',
        'bizRegionId' => 'BizRegionId',
        'browserConfig' => 'BrowserConfig',
        'chargeResourceMode' => 'ChargeResourceMode',
        'chargeType' => 'ChargeType',
        'cloudBrowserName' => 'CloudBrowserName',
        'imageId' => 'ImageId',
        'instanceType' => 'InstanceType',
        'maxAmount' => 'MaxAmount',
        'network' => 'Network',
        'nodePool' => 'NodePool',
        'osType' => 'OsType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policy' => 'Policy',
        'promotionId' => 'PromotionId',
        'securityPolicy' => 'SecurityPolicy',
        'storagePolicy' => 'StoragePolicy',
        'subPayType' => 'SubPayType',
        'tag' => 'Tag',
        'timers' => 'Timers',
        'userGroupIds' => 'UserGroupIds',
        'userInfo' => 'UserInfo',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (null !== $this->browserConfig) {
            $this->browserConfig->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->nodePool) {
            $this->nodePool->validate();
        }
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        if (null !== $this->securityPolicy) {
            $this->securityPolicy->validate();
        }
        if (null !== $this->storagePolicy) {
            $this->storagePolicy->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->timers)) {
            Model::validateArray($this->timers);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPackageType) {
            $res['AppPackageType'] = $this->appPackageType;
        }

        if (null !== $this->authNotificationEnabled) {
            $res['AuthNotificationEnabled'] = $this->authNotificationEnabled;
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

        if (null !== $this->browserConfig) {
            $res['BrowserConfig'] = null !== $this->browserConfig ? $this->browserConfig->toArray($noStream) : $this->browserConfig;
        }

        if (null !== $this->chargeResourceMode) {
            $res['ChargeResourceMode'] = $this->chargeResourceMode;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cloudBrowserName) {
            $res['CloudBrowserName'] = $this->cloudBrowserName;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->maxAmount) {
            $res['MaxAmount'] = $this->maxAmount;
        }

        if (null !== $this->network) {
            $res['Network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->nodePool) {
            $res['NodePool'] = null !== $this->nodePool ? $this->nodePool->toArray($noStream) : $this->nodePool;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
        }

        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }

        if (null !== $this->securityPolicy) {
            $res['SecurityPolicy'] = null !== $this->securityPolicy ? $this->securityPolicy->toArray($noStream) : $this->securityPolicy;
        }

        if (null !== $this->storagePolicy) {
            $res['StoragePolicy'] = null !== $this->storagePolicy ? $this->storagePolicy->toArray($noStream) : $this->storagePolicy;
        }

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
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

        if (null !== $this->timers) {
            if (\is_array($this->timers)) {
                $res['Timers'] = [];
                $n1 = 0;
                foreach ($this->timers as $item1) {
                    $res['Timers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppPackageType'])) {
            $model->appPackageType = $map['AppPackageType'];
        }

        if (isset($map['AuthNotificationEnabled'])) {
            $model->authNotificationEnabled = $map['AuthNotificationEnabled'];
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

        if (isset($map['BrowserConfig'])) {
            $model->browserConfig = browserConfig::fromMap($map['BrowserConfig']);
        }

        if (isset($map['ChargeResourceMode'])) {
            $model->chargeResourceMode = $map['ChargeResourceMode'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['CloudBrowserName'])) {
            $model->cloudBrowserName = $map['CloudBrowserName'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['MaxAmount'])) {
            $model->maxAmount = $map['MaxAmount'];
        }

        if (isset($map['Network'])) {
            $model->network = network::fromMap($map['Network']);
        }

        if (isset($map['NodePool'])) {
            $model->nodePool = nodePool::fromMap($map['NodePool']);
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }

        if (isset($map['SecurityPolicy'])) {
            $model->securityPolicy = securityPolicy::fromMap($map['SecurityPolicy']);
        }

        if (isset($map['StoragePolicy'])) {
            $model->storagePolicy = storagePolicy::fromMap($map['StoragePolicy']);
        }

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
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

        if (isset($map['Timers'])) {
            if (!empty($map['Timers'])) {
                $model->timers = [];
                $n1 = 0;
                foreach ($map['Timers'] as $item1) {
                    $model->timers[$n1] = timers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = users::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
