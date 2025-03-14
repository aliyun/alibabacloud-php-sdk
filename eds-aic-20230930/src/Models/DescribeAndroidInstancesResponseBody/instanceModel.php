<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\disks;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody\instanceModel\tags;
use AlibabaCloud\Tea\Model;

class instanceModel extends Model
{
    /**
     * @description The ID of the instance group.
     *
     * @example ag-ayyhomlal7po****
     *
     * @var string
     */
    public $androidInstanceGroupId;

    /**
     * @description The name of the instance group.
     *
     * @example AndroidInstanceGroupName
     *
     * @var string
     */
    public $androidInstanceGroupName;

    /**
     * @description The ID of the instance.
     *
     * @example acp-8at8h6ejkadjh****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @description The name of the instance.
     *
     * @example name
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @description The state of the instance.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $androidInstanceStatus;

    /**
     * @description The ID of the delivery group.
     *
     * @example aig-i7yv6tkn7kh8dv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the physical instance.
     *
     * @example ai-9ey6io0q58rcd****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @description The ID of the user to whom the instance is assigned.
     *
     * @example test
     *
     * @var string
     */
    public $authorizedUserId;

    /**
     * @description The ID of the bound user.
     *
     * @example test
     *
     * @var string
     */
    public $bindUserId;

    /**
     * @description The billing method of the instance.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of vCPUs.
     *
     * @example 4
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The disks.
     *
     * @var disks[]
     */
    public $disks;

    /**
     * @description The cause of the instance data backup failure or restoration failure.
     *
     * @example FilePathNotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The time when the instance was created.
     *
     * @example 2023-05-06 10:42:10
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the subscription instance group expires.
     *
     * @example 2024-07-15T02:03:33Z
     *
     * @var string
     */
    public $gmtExpired;

    /**
     * @description The time when the instance was modified.
     *
     * @example 2023-05-06 10:42:10
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @description The version of the image.
     *
     * @example 3.5.3.867
     *
     * @var string
     */
    public $imageVersion;

    /**
     * @description The type of the instance.
     *
     * @example acp.basic.small
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the key pair.
     *
     * @example kp-5hh431emkpucs****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @description The memory size.
     *
     * @example 1024
     *
     * @var int
     */
    public $memory;

    /**
     * @description The IP address of the ENI.
     *
     * @example 192.168.22.48
     *
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @var string
     */
    public $networkInterfaceIpv6Address;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-shenzhen+dir-211620****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the persistent session.
     *
     * @example p-0btrd5zj8epo****
     *
     * @var string
     */
    public $persistentAppInstanceId;

    /**
     * @description The ID of the policy.
     *
     * @example pg-0bszojpu0seql****
     *
     * @var string
     */
    public $policyGroupId;

    /**
     * @description The public IP address.
     *
     * @example 10.32.1.41
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @var string
     */
    public $publicIpv6Address;

    /**
     * @description The progress of instance data backup or restoration.
     *
     * @example 100
     *
     * @var int
     */
    public $rate;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The rendering type.
     *
     * @example local
     *
     * @var string
     */
    public $renderingType;

    /**
     * @description The status of the session connection.
     *
     *   connect
     *   disConnect
     *
     * @example connect
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'androidInstanceGroupId' => 'AndroidInstanceGroupId',
        'androidInstanceGroupName' => 'AndroidInstanceGroupName',
        'androidInstanceId' => 'AndroidInstanceId',
        'androidInstanceName' => 'AndroidInstanceName',
        'androidInstanceStatus' => 'AndroidInstanceStatus',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId' => 'AppInstanceId',
        'authorizedUserId' => 'AuthorizedUserId',
        'bindUserId' => 'BindUserId',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'disks' => 'Disks',
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
        'rate' => 'Rate',
        'regionId' => 'RegionId',
        'renderingType' => 'RenderingType',
        'sessionStatus' => 'SessionStatus',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
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
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceModel
     */
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
                $n = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
