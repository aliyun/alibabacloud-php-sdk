<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\aliyunRouterInfo;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\cisRouterInfo;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\erInfos;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\tags;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\vbrInfos;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVccResponseBody\content\vpdBaseInfo;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Express Connect circuit access point ID:
     *
     *   **ap-cn-wulanchabu-jn-ts-A**: Ulanqab-Jining-A
     *   **ap-cn-heyuan-yc-ts-SA127**: Heyuan-Yuancheng-A
     *
     * @example ap-cn-wulanchabu-jn-ts-A
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description Alibaba Cloud route information list
     *
     * @var aliyunRouterInfo[]
     */
    public $aliyunRouterInfo;

    /**
     * @description Whether Lingjun HUB has been bound to a network instance
     *
     *   **true**: Bound
     *   **false**: unbound
     *
     * @example true
     *
     * @var bool
     */
    public $attachErStatus;

    /**
     * @description The bandwidth of the port.
     *
     * @example 1G
     *
     * @var string
     */
    public $bandwidthStr;

    /**
     * @description BGP AS number
     *
     * @example 45644
     *
     * @var string
     */
    public $bgpAsn;

    /**
     * @description BGP CIDR block
     *
     * @example 10.4.0.0/24
     *
     * @var string
     */
    public $bgpCidr;

    /**
     * @description The ID of the CEN instance; [What is the CEN?](https://help.aliyun.com/document_detail/181681.html)
     *
     * You can call the [DescribeCens](https://help.aliyun.com/document_detail/468215.htm) to query the information of CEN instances under the current Alibaba Cloud account.
     * @example cen-m2iskbojlvda5w65fp
     *
     * @var string
     */
    public $cenId;

    /**
     * @description Account to which the CEN belongs
     *
     * @example 1620939556166279
     *
     * @var string
     */
    public $cenOwnerId;

    /**
     * @description Lingjun Network Routing Information List
     *
     * @var cisRouterInfo[]
     */
    public $cisRouterInfo;

    /**
     * @description Commodity code
     *
     * @example bccluster_cloudconnectionpre_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The connection mode. Valid values:
     *
     *   **VPC**
     *   **CENTR**
     *
     * @example CENTR
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description The time when the data address was created.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Current Node
     *
     * @example task-xxx-node-x
     *
     * @var string
     */
    public $currentNode;

    /**
     * @description Cycle
     *
     * @example 1
     *
     * @var string
     */
    public $duration;

    /**
     * @description List of bound Lingjun HUB information
     *
     * @var erInfos[]
     */
    public $erInfos;

    /**
     * @description The time when the application expired.
     *
     * @example 1678379917000
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @description The time when the agent was last modified.
     *
     * @example 1648085472000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The billing method for network usage.
     *
     *   **PayByTraffic**: pay-by-traffic
     *   **PayByBandwidth**: pay-by-bandwidth
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The connectivity provider of the Express Connect circuit. Valid values:
     *
     *   **CO**: other connectivity providers in the Chinese mainland
     *
     * @example CO
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description The error message. (If the instance is in the Exception state, the exception cause is prompted.)
     *
     * @example You don\\"t have the permission of this operation, action=eflo:GetVcc, arn=acs:eflo:cn-heyuan:1263399219805497:vcc/vcc-cn-fhh3yxjwe01, resourceGroup=null
     *
     * @var string
     */
    public $message;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **PREPAY**: subscription
     *   **POSTPAY**: pay-as-you-go
     *
     * @example PrePay
     *
     * @var string
     */
    public $payType;

    /**
     * @description The port type of the Express Connect circuit. Valid values:
     *
     *   **100GBase-LR**: 100,000 megabytes of single-mode optical port (10 km)
     *
     * @example 100GBase-LR
     *
     * @var string
     */
    public $portType;

    /**
     * @description The billing cycle. Valid values:
     *
     *   **Month**: Billed on a monthly basis
     *   **Year**: Billed on an annual basis
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of your Alibaba Cloud resource group.
     *
     * For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/94475.htm).
     * @example rg-aek2l4sq6l7unhi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specification; value:
     *
     *   **Large**: Large
     *
     * @example Large
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the cache reserve instance. Valid values:
     *
     *   **Available**: Normal.
     *   **Not Available**: Not available.
     *   **Executing**: The task is being executed.
     *   **Deleting**: The account is being deleted
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag information.
     *
     * You can specify up to 20 tags.
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the tenant.
     *
     * @example 1620939556166279
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the vSwitch. [Virtual Private Cloud VSwitch](https://help.aliyun.com/document_detail/100380.html).
     *
     * You can call the [DescribeVSwitches](https://help.aliyun.com/document_detail/35748.html) operation to query created vSwitches.
     * @example vsw-uf6u8473r84e6n1n19he5
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Information list of border routers
     *
     * @var vbrInfos[]
     */
    public $vbrInfos;

    /**
     * @description The ID of the Lingjun connection instance.
     *
     * @example vcc-cn-cqf2xh40101
     *
     * @var string
     */
    public $vccId;

    /**
     * @description The name of the Lingjun connection instance.
     *
     * @example vcc-heyuan-backup
     *
     * @var string
     */
    public $vccName;

    /**
     * @description Virtual Private Cloud IDs; [What is Virtual Private Cloud](https://help.aliyun.com/document_detail/34217.html)
     *
     * You can call the [DescribeVpcs](https://help.aliyun.com/document_detail/35739.html#demo-0) operation to query the specified VPC.
     * @example vpc-j6ctp4n75306phv5tmpsm
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Lingjun network segment information (applicable to the scene where the old version of Lingjun connection is directly bound to Lingjun network segment)
     *
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * @example vpd-d3isyds4
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The zone ID.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessPointId'      => 'AccessPointId',
        'aliyunRouterInfo'   => 'AliyunRouterInfo',
        'attachErStatus'     => 'AttachErStatus',
        'bandwidthStr'       => 'BandwidthStr',
        'bgpAsn'             => 'BgpAsn',
        'bgpCidr'            => 'BgpCidr',
        'cenId'              => 'CenId',
        'cenOwnerId'         => 'CenOwnerId',
        'cisRouterInfo'      => 'CisRouterInfo',
        'commodityCode'      => 'CommodityCode',
        'connectionType'     => 'ConnectionType',
        'createTime'         => 'CreateTime',
        'currentNode'        => 'CurrentNode',
        'duration'           => 'Duration',
        'erInfos'            => 'ErInfos',
        'expirationDate'     => 'ExpirationDate',
        'gmtModified'        => 'GmtModified',
        'internetChargeType' => 'InternetChargeType',
        'lineOperator'       => 'LineOperator',
        'message'            => 'Message',
        'payType'            => 'PayType',
        'portType'           => 'PortType',
        'pricingCycle'       => 'PricingCycle',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'spec'               => 'Spec',
        'status'             => 'Status',
        'tags'               => 'Tags',
        'tenantId'           => 'TenantId',
        'vSwitchId'          => 'VSwitchId',
        'vbrInfos'           => 'VbrInfos',
        'vccId'              => 'VccId',
        'vccName'            => 'VccName',
        'vpcId'              => 'VpcId',
        'vpdBaseInfo'        => 'VpdBaseInfo',
        'vpdId'              => 'VpdId',
        'zoneId'             => 'ZoneId',
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
        if (null !== $this->attachErStatus) {
            $res['AttachErStatus'] = $this->attachErStatus;
        }
        if (null !== $this->bandwidthStr) {
            $res['BandwidthStr'] = $this->bandwidthStr;
        }
        if (null !== $this->bgpAsn) {
            $res['BgpAsn'] = $this->bgpAsn;
        }
        if (null !== $this->bgpCidr) {
            $res['BgpCidr'] = $this->bgpCidr;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
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
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
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
        if (null !== $this->erInfos) {
            $res['ErInfos'] = [];
            if (null !== $this->erInfos && \is_array($this->erInfos)) {
                $n = 0;
                foreach ($this->erInfos as $item) {
                    $res['ErInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vbrInfos) {
            $res['VbrInfos'] = [];
            if (null !== $this->vbrInfos && \is_array($this->vbrInfos)) {
                $n = 0;
                foreach ($this->vbrInfos as $item) {
                    $res['VbrInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AttachErStatus'])) {
            $model->attachErStatus = $map['AttachErStatus'];
        }
        if (isset($map['BandwidthStr'])) {
            $model->bandwidthStr = $map['BandwidthStr'];
        }
        if (isset($map['BgpAsn'])) {
            $model->bgpAsn = $map['BgpAsn'];
        }
        if (isset($map['BgpCidr'])) {
            $model->bgpCidr = $map['BgpCidr'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
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
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
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
        if (isset($map['ErInfos'])) {
            if (!empty($map['ErInfos'])) {
                $model->erInfos = [];
                $n              = 0;
                foreach ($map['ErInfos'] as $item) {
                    $model->erInfos[$n++] = null !== $item ? erInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VbrInfos'])) {
            if (!empty($map['VbrInfos'])) {
                $model->vbrInfos = [];
                $n               = 0;
                foreach ($map['VbrInfos'] as $item) {
                    $model->vbrInfos[$n++] = null !== $item ? vbrInfos::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
