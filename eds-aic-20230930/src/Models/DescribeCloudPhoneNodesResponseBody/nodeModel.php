<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody\nodeModel\networkInfos;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCloudPhoneNodesResponseBody\nodeModel\phoneDataInfo;

class nodeModel extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $cpu;

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
    public $instanceType;

    /**
     * @var int
     */
    public $memory;

    /**
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
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $phoneCount;

    /**
     * @var phoneDataInfo
     */
    public $phoneDataInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resolutionHeight;

    /**
     * @var int
     */
    public $resolutionWidth;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @var int
     */
    public $shareDataVolume;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'cpu' => 'Cpu',
        'gmtCreate' => 'GmtCreate',
        'gmtExpired' => 'GmtExpired',
        'gmtModified' => 'GmtModified',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'networkId' => 'NetworkId',
        'networkInfos' => 'NetworkInfos',
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

    public function validate()
    {
        if (\is_array($this->networkInfos)) {
            Model::validateArray($this->networkInfos);
        }
        if (null !== $this->phoneDataInfo) {
            $this->phoneDataInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            if (\is_array($this->networkInfos)) {
                $res['NetworkInfos'] = [];
                $n1 = 0;
                foreach ($this->networkInfos as $item1) {
                    $res['NetworkInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            $res['PhoneDataInfo'] = null !== $this->phoneDataInfo ? $this->phoneDataInfo->toArray($noStream) : $this->phoneDataInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
                $n1 = 0;
                foreach ($map['NetworkInfos'] as $item1) {
                    $model->networkInfos[$n1] = networkInfos::fromMap($item1);
                    ++$n1;
                }
            }
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
