<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\appManagePolicy;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\disks;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\displayConfig;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\tags;

class instanceModel extends Model
{
    /**
     * @var string
     */
    public $androidInstanceGroupId;

    /**
     * @var string
     */
    public $androidInstanceGroupName;

    /**
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var string
     */
    public $androidInstanceName;

    /**
     * @var string
     */
    public $androidInstanceStatus;

    /**
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var appManagePolicy
     */
    public $appManagePolicy;

    /**
     * @var string
     */
    public $authorizedUserId;

    /**
     * @var string
     */
    public $bindUserId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var disks[]
     */
    public $disks;

    /**
     * @var displayConfig
     */
    public $displayConfig;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtExpired;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @var string
     */
    public $networkInterfaceIpv6Address;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $persistentAppInstanceId;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $publicIpv6Address;

    /**
     * @var string
     */
    public $qosRuleId;

    /**
     * @var int
     */
    public $rate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $renderingType;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'androidInstanceGroupId' => 'AndroidInstanceGroupId',
        'androidInstanceGroupName' => 'AndroidInstanceGroupName',
        'androidInstanceId' => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'androidInstanceStatus' => 'AndroidInstanceStatus',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'appManagePolicy' => 'AppManagePolicy',
        'authorizedUserId' => 'AuthorizedUserId',
        'bindUserId' => 'BindUserId',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'disks' => 'Disks',
        'displayConfig' => 'DisplayConfig',
        'errorCode' => 'ErrorCode',
        'gmtCreate' => 'GmtCreate',
        'gmtExpired' => 'GmtExpired',
        'gmtModified' => 'GmtModified',
        'imageId' => 'ImageId',
        'imageVersion' => 'ImageVersion',
        'instanceType' => 'InstanceType',
        'keyPairId' => 'KeyPairId',
        'memory' => 'Memory',
        'networkInterfaceIp' => 'NetworkInterfaceIp',
        'networkInterfaceIpv6Address' => 'NetworkInterfaceIpv6Address',
        'officeSiteId' => 'OfficeSiteId',
        'persistentAppInstanceId' => 'PersistentAppInstanceId',
        'policyGroupId' => 'PolicyGroupId',
        'publicIpAddress' => 'PublicIpAddress',
        'publicIpv6Address' => 'PublicIpv6Address',
        'qosRuleId' => 'QosRuleId',
        'rate' => 'Rate',
        'regionId' => 'RegionId',
        'renderingType' => 'RenderingType',
        'sessionStatus' => 'SessionStatus',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (null !== $this->appManagePolicy) {
            $this->appManagePolicy->validate();
        }
        if (\is_array($this->disks)) {
            Model::validateArray($this->disks);
        }
        if (null !== $this->displayConfig) {
            $this->displayConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceGroupId) {
            $res['AndroidInstanceGroupId'] = $this->androidInstanceGroupId;
        }

        if (null !== $this->androidInstanceGroupName) {
            $res['AndroidInstanceGroupName'] = $this->androidInstanceGroupName;
        }

        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }

        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }

        if (null !== $this->androidInstanceStatus) {
            $res['AndroidInstanceStatus'] = $this->androidInstanceStatus;
        }

        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->appManagePolicy) {
            $res['AppManagePolicy'] = null !== $this->appManagePolicy ? $this->appManagePolicy->toArray($noStream) : $this->appManagePolicy;
        }

        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }

        if (null !== $this->bindUserId) {
            $res['BindUserId'] = $this->bindUserId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->disks) {
            if (\is_array($this->disks)) {
                $res['Disks'] = [];
                $n1 = 0;
                foreach ($this->disks as $item1) {
                    $res['Disks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->displayConfig) {
            $res['DisplayConfig'] = null !== $this->displayConfig ? $this->displayConfig->toArray($noStream) : $this->displayConfig;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }

        if (null !== $this->networkInterfaceIpv6Address) {
            $res['NetworkInterfaceIpv6Address'] = $this->networkInterfaceIpv6Address;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->persistentAppInstanceId) {
            $res['PersistentAppInstanceId'] = $this->persistentAppInstanceId;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }

        if (null !== $this->publicIpv6Address) {
            $res['PublicIpv6Address'] = $this->publicIpv6Address;
        }

        if (null !== $this->qosRuleId) {
            $res['QosRuleId'] = $this->qosRuleId;
        }

        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->renderingType) {
            $res['RenderingType'] = $this->renderingType;
        }

        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AndroidInstanceGroupId'])) {
            $model->androidInstanceGroupId = $map['AndroidInstanceGroupId'];
        }

        if (isset($map['AndroidInstanceGroupName'])) {
            $model->androidInstanceGroupName = $map['AndroidInstanceGroupName'];
        }

        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }

        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }

        if (isset($map['AndroidInstanceStatus'])) {
            $model->androidInstanceStatus = $map['AndroidInstanceStatus'];
        }

        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }

        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }

        if (isset($map['AppManagePolicy'])) {
            $model->appManagePolicy = appManagePolicy::fromMap($map['AppManagePolicy']);
        }

        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }

        if (isset($map['BindUserId'])) {
            $model->bindUserId = $map['BindUserId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n1 = 0;
                foreach ($map['Disks'] as $item1) {
                    $model->disks[$n1++] = disks::fromMap($item1);
                }
            }
        }

        if (isset($map['DisplayConfig'])) {
            $model->displayConfig = displayConfig::fromMap($map['DisplayConfig']);
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }

        if (isset($map['NetworkInterfaceIpv6Address'])) {
            $model->networkInterfaceIpv6Address = $map['NetworkInterfaceIpv6Address'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PersistentAppInstanceId'])) {
            $model->persistentAppInstanceId = $map['PersistentAppInstanceId'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }

        if (isset($map['PublicIpv6Address'])) {
            $model->publicIpv6Address = $map['PublicIpv6Address'];
        }

        if (isset($map['QosRuleId'])) {
            $model->qosRuleId = $map['QosRuleId'];
        }

        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RenderingType'])) {
            $model->renderingType = $map['RenderingType'];
        }

        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
