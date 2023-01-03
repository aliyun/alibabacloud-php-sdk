<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\aliyunRouterInfo;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\cisRouterInfo;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\vpdBaseInfo;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example ap-cn-beijing-jy-A-oxs
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @var aliyunRouterInfo[]
     */
    public $aliyunRouterInfo;

    /**
     * @example 1G
     *
     * @var string
     */
    public $bandwidthStr;

    /**
     * @example 10.4.0.0/24
     *
     * @var string
     */
    public $bgpCidr;

    /**
     * @example cen-m2iskbojlvda5w65fp
     *
     * @var string
     */
    public $cenId;

    /**
     * @var cisRouterInfo[]
     */
    public $cisRouterInfo;

    /**
     * @example bccluster_cloudconnectionpre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example 1648085472000
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentNode;

    /**
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @example 1648085472000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example Other
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @var string
     */
    public $message;

    /**
     * @example PrePay
     *
     * @var string
     */
    public $payType;

    /**
     * @example 100G
     *
     * @var string
     */
    public $portType;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Large
     *
     * @var string
     */
    public $spec;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example NFZLWCNY
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example vsw-uf6u8473r84e6n1n19he5
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vcc-cn-cqf2xh40101
     *
     * @var string
     */
    public $vccId;

    /**
     * @example vcc-heyuan-backup
     *
     * @var string
     */
    public $vccName;

    /**
     * @example vpc-j6ctp4n75306phv5tmpsm
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @example vpd-d3isyds4
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'accessPointId'      => 'AccessPointId',
        'aliyunRouterInfo'   => 'AliyunRouterInfo',
        'bandwidthStr'       => 'BandwidthStr',
        'bgpCidr'            => 'BgpCidr',
        'cenId'              => 'CenId',
        'cisRouterInfo'      => 'CisRouterInfo',
        'commodityCode'      => 'CommodityCode',
        'createTime'         => 'CreateTime',
        'currentNode'        => 'CurrentNode',
        'duration'           => 'Duration',
        'gmtModified'        => 'GmtModified',
        'internetChargeType' => 'InternetChargeType',
        'lineOperator'       => 'LineOperator',
        'message'            => 'Message',
        'payType'            => 'PayType',
        'portType'           => 'PortType',
        'pricingCycle'       => 'PricingCycle',
        'regionId'           => 'RegionId',
        'spec'               => 'Spec',
        'status'             => 'Status',
        'tenantId'           => 'TenantId',
        'vSwitchId'          => 'VSwitchId',
        'vccId'              => 'VccId',
        'vccName'            => 'VccName',
        'vpcId'              => 'VpcId',
        'vpdBaseInfo'        => 'VpdBaseInfo',
        'vpdId'              => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->aliyunRouterInfo) {
            $res['AliyunRouterInfo'] = [];
            if (null !== $this->aliyunRouterInfo && \is_array($this->aliyunRouterInfo)) {
                $n = 0;
                foreach ($this->aliyunRouterInfo as $item) {
                    $res['AliyunRouterInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bandwidthStr) {
            $res['BandwidthStr'] = $this->bandwidthStr;
        }
        if (null !== $this->bgpCidr) {
            $res['BgpCidr'] = $this->bgpCidr;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cisRouterInfo) {
            $res['CisRouterInfo'] = [];
            if (null !== $this->cisRouterInfo && \is_array($this->cisRouterInfo)) {
                $n = 0;
                foreach ($this->cisRouterInfo as $item) {
                    $res['CisRouterInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->currentNode) {
            $res['CurrentNode'] = $this->currentNode;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vccName) {
            $res['VccName'] = $this->vccName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdBaseInfo) {
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toMap() : null;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AliyunRouterInfo'])) {
            if (!empty($map['AliyunRouterInfo'])) {
                $model->aliyunRouterInfo = [];
                $n                       = 0;
                foreach ($map['AliyunRouterInfo'] as $item) {
                    $model->aliyunRouterInfo[$n++] = null !== $item ? aliyunRouterInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BandwidthStr'])) {
            $model->bandwidthStr = $map['BandwidthStr'];
        }
        if (isset($map['BgpCidr'])) {
            $model->bgpCidr = $map['BgpCidr'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CisRouterInfo'])) {
            if (!empty($map['CisRouterInfo'])) {
                $model->cisRouterInfo = [];
                $n                    = 0;
                foreach ($map['CisRouterInfo'] as $item) {
                    $model->cisRouterInfo[$n++] = null !== $item ? cisRouterInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentNode'])) {
            $model->currentNode = $map['CurrentNode'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VccName'])) {
            $model->vccName = $map['VccName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdBaseInfo'])) {
            $model->vpdBaseInfo = vpdBaseInfo::fromMap($map['VpdBaseInfo']);
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
