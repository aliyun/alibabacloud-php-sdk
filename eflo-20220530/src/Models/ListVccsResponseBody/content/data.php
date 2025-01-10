<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data\erInfos;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data\tags;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data\vpdBaseInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description The bandwidth of the port.
     *
     * @example 1000
     *
     * @var string
     */
    public $bandwidthStr;

    /**
     * @description bgp as number
     *
     * @example bgpAsn
     *
     * @var string
     */
    public $bgpAsn;

    /**
     * @description bgp network segment
     *
     * @example 172.16.128.0/24
     *
     * @var string
     */
    public $bgpCidr;

    /**
     * @description The ID of the CEN instance; [What is the CEN?](https://help.aliyun.com/document_detail/181681.html)
     *
     * You can call the [DescribeCens](https://help.aliyun.com/document_detail/468215.htm) to query the information of CEN instances under the current Alibaba Cloud account.
     * @example cen-w15qot0pfvs83pkckj
     *
     * @var string
     */
    public $cenId;

    /**
     * @description Account to which cen belongs
     *
     * @example 1238685214107736
     *
     * @var string
     */
    public $cenOwnerId;

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
     * @example 1678273219000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Current process node
     *
     * @example test-xxxx-node-x
     *
     * @var string
     */
    public $currentNode;

    /**
     * @description List of bound Lingjun HUB information
     *
     * @var erInfos[]
     */
    public $erInfos;

    /**
     * @description The time when the application expired.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $expirationDate;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $gmtModified;

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
     * @example some message
     *
     * @var string
     */
    public $message;

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
     * @description Process progress; value returns 0 to 1; not started is null
     *
     * @example 1
     *
     * @var float
     */
    public $rate;

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
     * For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu).
     * @example rg-aek2l4sq6l7unhi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The compute specification.
     *
     * @example Large
     *
     * @var string
     */
    public $spec;

    /**
     * @description The state of the rule.
     *
     * @example Init
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
     * @description The job ID.
     *
     * @example task-cd544092-ed0a-49e9-83eb-e8c94770dccf
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The ID of the tenant.
     *
     * @example 1620939556166279
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the Lingjun connection instance.
     *
     * @example vcc-cn-zvp2w222001
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
     * @example vpc-f8ziirfl9k25h2qn7y4f8
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
     * @example vpd-eoiy88ju
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
        'accessPointId'   => 'AccessPointId',
        'bandwidthStr'    => 'BandwidthStr',
        'bgpAsn'          => 'BgpAsn',
        'bgpCidr'         => 'BgpCidr',
        'cenId'           => 'CenId',
        'cenOwnerId'      => 'CenOwnerId',
        'commodityCode'   => 'CommodityCode',
        'connectionType'  => 'ConnectionType',
        'createTime'      => 'CreateTime',
        'currentNode'     => 'CurrentNode',
        'erInfos'         => 'ErInfos',
        'expirationDate'  => 'ExpirationDate',
        'gmtModified'     => 'GmtModified',
        'lineOperator'    => 'LineOperator',
        'message'         => 'Message',
        'portType'        => 'PortType',
        'rate'            => 'Rate',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'spec'            => 'Spec',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'taskId'          => 'TaskId',
        'tenantId'        => 'TenantId',
        'vccId'           => 'VccId',
        'vccName'         => 'VccName',
        'vpcId'           => 'VpcId',
        'vpdBaseInfo'     => 'VpdBaseInfo',
        'vpdId'           => 'VpdId',
        'zoneId'          => 'ZoneId',
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
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
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
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
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
