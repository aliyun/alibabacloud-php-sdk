<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody\nodeModel\bizTags;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody\nodeModel\networkInfos;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody\nodeModel\phoneDataInfo;
use AlibabaCloud\Tea\Model;

class nodeModel extends Model
{
    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $bandwidthPackageType;

    /**
     * @var bizTags[]
     */
    public $bizTags;

    /**
     * @description The billing method.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of CPU cores.
     *
     * @example 2
     *
     * @var string
     */
    public $cpu;

    /**
     * @description The creation time.
     *
     * @example 2024-11-13 02:03:14
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The expiration time of the subscription matrix.
     *
     * @example 2025-03-09 02:00:34
     *
     * @var string
     */
    public $gmtExpired;

    /**
     * @description The last modification time.
     *
     * @example 2025-02-13 02:03:14
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 32
     *
     * @var int
     */
    public $memory;

    /**
     * @description The network ID.
     *
     * @example cn-hangzhou+dir-5mwr9azebliva****
     *
     * @var string
     */
    public $networkId;

    /**
     * @var networkInfos[]
     */
    public $networkInfos;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @description The matrix ID.
     *
     * @example cpn-ehs0yoedq8ntm****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The matrix name.
     *
     * @example node_name
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The number of cloud phone instances per matrix.
     *
     * @example 25
     *
     * @var int
     */
    public $phoneCount;

    /**
     * @var phoneDataInfo
     */
    public $phoneDataInfo;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The height of the resolution. Unit: pixel.
     *
     * @example 1280
     *
     * @var int
     */
    public $resolutionHeight;

    /**
     * @description The width of the resolution. Unit: pixel.
     *
     * @example 720
     *
     * @var int
     */
    public $resolutionWidth;

    /**
     * @description The matrix specification.
     *
     * @example cpm.gn6.gx1
     *
     * @var string
     */
    public $serverType;

    /**
     * @description The size of the shared storage. Unit: GiB.
     *
     * @example 100
     *
     * @var int
     */
    public $shareDataVolume;

    /**
     * @description The matrix status.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-2zeekryyc1q3sm72l****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'bandwidthPackageType' => 'BandwidthPackageType',
        'bizTags' => 'BizTags',
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'gmtCreate' => 'GmtCreate',
        'gmtExpired' => 'GmtExpired',
        'gmtModified' => 'GmtModified',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'networkId' => 'NetworkId',
        'networkInfos' => 'NetworkInfos',
        'networkType' => 'NetworkType',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'phoneCount' => 'PhoneCount',
        'phoneDataInfo' => 'PhoneDataInfo',
        'regionId' => 'RegionId',
        'resolutionHeight' => 'ResolutionHeight',
        'resolutionWidth' => 'ResolutionWidth',
        'serverType' => 'ServerType',
        'shareDataVolume' => 'ShareDataVolume',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->bandwidthPackageType) {
            $res['BandwidthPackageType'] = $this->bandwidthPackageType;
        }
        if (null !== $this->bizTags) {
            $res['BizTags'] = [];
            if (null !== $this->bizTags && \is_array($this->bizTags)) {
                $n = 0;
                foreach ($this->bizTags as $item) {
                    $res['BizTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->networkInfos) {
            $res['NetworkInfos'] = [];
            if (null !== $this->networkInfos && \is_array($this->networkInfos)) {
                $n = 0;
                foreach ($this->networkInfos as $item) {
                    $res['NetworkInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }
        if (null !== $this->phoneDataInfo) {
            $res['PhoneDataInfo'] = null !== $this->phoneDataInfo ? $this->phoneDataInfo->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resolutionHeight) {
            $res['ResolutionHeight'] = $this->resolutionHeight;
        }
        if (null !== $this->resolutionWidth) {
            $res['ResolutionWidth'] = $this->resolutionWidth;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }
        if (null !== $this->shareDataVolume) {
            $res['ShareDataVolume'] = $this->shareDataVolume;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['BandwidthPackageType'])) {
            $model->bandwidthPackageType = $map['BandwidthPackageType'];
        }
        if (isset($map['BizTags'])) {
            if (!empty($map['BizTags'])) {
                $model->bizTags = [];
                $n = 0;
                foreach ($map['BizTags'] as $item) {
                    $model->bizTags[$n++] = null !== $item ? bizTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
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
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['NetworkInfos'])) {
            if (!empty($map['NetworkInfos'])) {
                $model->networkInfos = [];
                $n = 0;
                foreach ($map['NetworkInfos'] as $item) {
                    $model->networkInfos[$n++] = null !== $item ? networkInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }
        if (isset($map['PhoneDataInfo'])) {
            $model->phoneDataInfo = phoneDataInfo::fromMap($map['PhoneDataInfo']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResolutionHeight'])) {
            $model->resolutionHeight = $map['ResolutionHeight'];
        }
        if (isset($map['ResolutionWidth'])) {
            $model->resolutionWidth = $map['ResolutionWidth'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }
        if (isset($map['ShareDataVolume'])) {
            $model->shareDataVolume = $map['ShareDataVolume'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
