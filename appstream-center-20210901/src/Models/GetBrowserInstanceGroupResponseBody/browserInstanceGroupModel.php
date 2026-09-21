<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\authorizedUserInfo;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\browserConfig;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\duration;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\network;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\nodeInstanceType;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\nodePool;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\policy;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\timers;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetBrowserInstanceGroupResponseBody\browserInstanceGroupModel\userLimit;

class browserInstanceGroupModel extends Model
{
    /**
     * @var bool
     */
    public $authNotificationEnabled;

    /**
     * @var authorizedUserInfo
     */
    public $authorizedUserInfo;

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
    public $browserInstanceGroupId;

    /**
     * @var string
     */
    public $browserInstanceGroupName;

    /**
     * @var string
     */
    public $browserInstanceGroupSetId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $defaultAccessUrl;

    /**
     * @var duration
     */
    public $duration;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $homepage;

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
     * @var nodeInstanceType
     */
    public $nodeInstanceType;

    /**
     * @var nodePool[]
     */
    public $nodePool;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var bool
     */
    public $supportUserGroupMixedAuth;

    /**
     * @var string
     */
    public $tier;

    /**
     * @var timers[]
     */
    public $timers;

    /**
     * @var string
     */
    public $userGroupAuthMode;

    /**
     * @var userLimit
     */
    public $userLimit;
    protected $_name = [
        'authNotificationEnabled' => 'AuthNotificationEnabled',
        'authorizedUserInfo' => 'AuthorizedUserInfo',
        'bizRegionId' => 'BizRegionId',
        'browserConfig' => 'BrowserConfig',
        'browserInstanceGroupId' => 'BrowserInstanceGroupId',
        'browserInstanceGroupName' => 'BrowserInstanceGroupName',
        'browserInstanceGroupSetId' => 'BrowserInstanceGroupSetId',
        'chargeType' => 'ChargeType',
        'defaultAccessUrl' => 'DefaultAccessUrl',
        'duration' => 'Duration',
        'expiredTime' => 'ExpiredTime',
        'gmtCreate' => 'GmtCreate',
        'homepage' => 'Homepage',
        'imageId' => 'ImageId',
        'instanceType' => 'InstanceType',
        'maxAmount' => 'MaxAmount',
        'network' => 'Network',
        'nodeInstanceType' => 'NodeInstanceType',
        'nodePool' => 'NodePool',
        'osType' => 'OsType',
        'policy' => 'Policy',
        'status' => 'Status',
        'subPayType' => 'SubPayType',
        'supportUserGroupMixedAuth' => 'SupportUserGroupMixedAuth',
        'tier' => 'Tier',
        'timers' => 'Timers',
        'userGroupAuthMode' => 'UserGroupAuthMode',
        'userLimit' => 'UserLimit',
    ];

    public function validate()
    {
        if (null !== $this->authorizedUserInfo) {
            $this->authorizedUserInfo->validate();
        }
        if (null !== $this->browserConfig) {
            $this->browserConfig->validate();
        }
        if (null !== $this->duration) {
            $this->duration->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->nodeInstanceType) {
            $this->nodeInstanceType->validate();
        }
        if (\is_array($this->nodePool)) {
            Model::validateArray($this->nodePool);
        }
        if (null !== $this->policy) {
            $this->policy->validate();
        }
        if (\is_array($this->timers)) {
            Model::validateArray($this->timers);
        }
        if (null !== $this->userLimit) {
            $this->userLimit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authNotificationEnabled) {
            $res['AuthNotificationEnabled'] = $this->authNotificationEnabled;
        }

        if (null !== $this->authorizedUserInfo) {
            $res['AuthorizedUserInfo'] = null !== $this->authorizedUserInfo ? $this->authorizedUserInfo->toArray($noStream) : $this->authorizedUserInfo;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->browserConfig) {
            $res['BrowserConfig'] = null !== $this->browserConfig ? $this->browserConfig->toArray($noStream) : $this->browserConfig;
        }

        if (null !== $this->browserInstanceGroupId) {
            $res['BrowserInstanceGroupId'] = $this->browserInstanceGroupId;
        }

        if (null !== $this->browserInstanceGroupName) {
            $res['BrowserInstanceGroupName'] = $this->browserInstanceGroupName;
        }

        if (null !== $this->browserInstanceGroupSetId) {
            $res['BrowserInstanceGroupSetId'] = $this->browserInstanceGroupSetId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->defaultAccessUrl) {
            $res['DefaultAccessUrl'] = $this->defaultAccessUrl;
        }

        if (null !== $this->duration) {
            $res['Duration'] = null !== $this->duration ? $this->duration->toArray($noStream) : $this->duration;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->homepage) {
            $res['Homepage'] = $this->homepage;
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

        if (null !== $this->nodeInstanceType) {
            $res['NodeInstanceType'] = null !== $this->nodeInstanceType ? $this->nodeInstanceType->toArray($noStream) : $this->nodeInstanceType;
        }

        if (null !== $this->nodePool) {
            if (\is_array($this->nodePool)) {
                $res['NodePool'] = [];
                $n1 = 0;
                foreach ($this->nodePool as $item1) {
                    $res['NodePool'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toArray($noStream) : $this->policy;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }

        if (null !== $this->supportUserGroupMixedAuth) {
            $res['SupportUserGroupMixedAuth'] = $this->supportUserGroupMixedAuth;
        }

        if (null !== $this->tier) {
            $res['Tier'] = $this->tier;
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

        if (null !== $this->userGroupAuthMode) {
            $res['UserGroupAuthMode'] = $this->userGroupAuthMode;
        }

        if (null !== $this->userLimit) {
            $res['UserLimit'] = null !== $this->userLimit ? $this->userLimit->toArray($noStream) : $this->userLimit;
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
        if (isset($map['AuthNotificationEnabled'])) {
            $model->authNotificationEnabled = $map['AuthNotificationEnabled'];
        }

        if (isset($map['AuthorizedUserInfo'])) {
            $model->authorizedUserInfo = authorizedUserInfo::fromMap($map['AuthorizedUserInfo']);
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['BrowserConfig'])) {
            $model->browserConfig = browserConfig::fromMap($map['BrowserConfig']);
        }

        if (isset($map['BrowserInstanceGroupId'])) {
            $model->browserInstanceGroupId = $map['BrowserInstanceGroupId'];
        }

        if (isset($map['BrowserInstanceGroupName'])) {
            $model->browserInstanceGroupName = $map['BrowserInstanceGroupName'];
        }

        if (isset($map['BrowserInstanceGroupSetId'])) {
            $model->browserInstanceGroupSetId = $map['BrowserInstanceGroupSetId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['DefaultAccessUrl'])) {
            $model->defaultAccessUrl = $map['DefaultAccessUrl'];
        }

        if (isset($map['Duration'])) {
            $model->duration = duration::fromMap($map['Duration']);
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Homepage'])) {
            $model->homepage = $map['Homepage'];
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

        if (isset($map['NodeInstanceType'])) {
            $model->nodeInstanceType = nodeInstanceType::fromMap($map['NodeInstanceType']);
        }

        if (isset($map['NodePool'])) {
            if (!empty($map['NodePool'])) {
                $model->nodePool = [];
                $n1 = 0;
                foreach ($map['NodePool'] as $item1) {
                    $model->nodePool[$n1] = nodePool::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }

        if (isset($map['SupportUserGroupMixedAuth'])) {
            $model->supportUserGroupMixedAuth = $map['SupportUserGroupMixedAuth'];
        }

        if (isset($map['Tier'])) {
            $model->tier = $map['Tier'];
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

        if (isset($map['UserGroupAuthMode'])) {
            $model->userGroupAuthMode = $map['UserGroupAuthMode'];
        }

        if (isset($map['UserLimit'])) {
            $model->userLimit = userLimit::fromMap($map['UserLimit']);
        }

        return $model;
    }
}
