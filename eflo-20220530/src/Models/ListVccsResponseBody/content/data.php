<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data\erInfos;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data\tags;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data\vpdBaseInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $accessPointId;

    /**
     * @var string
     */
    public $bandwidthStr;

    /**
     * @var string
     */
    public $bgpAsn;

    /**
     * @var string
     */
    public $bgpCidr;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenOwnerId;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentNode;

    /**
     * @var erInfos[]
     */
    public $erInfos;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $lineOperator;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $portType;

    /**
     * @var float
     */
    public $rate;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vccId;

    /**
     * @var string
     */
    public $vccName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessPointId' => 'AccessPointId',
        'bandwidthStr' => 'BandwidthStr',
        'bgpAsn' => 'BgpAsn',
        'bgpCidr' => 'BgpCidr',
        'cenId' => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'commodityCode' => 'CommodityCode',
        'connectionType' => 'ConnectionType',
        'createTime' => 'CreateTime',
        'currentNode' => 'CurrentNode',
        'erInfos' => 'ErInfos',
        'expirationDate' => 'ExpirationDate',
        'gmtModified' => 'GmtModified',
        'lineOperator' => 'LineOperator',
        'message' => 'Message',
        'portType' => 'PortType',
        'rate' => 'Rate',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'spec' => 'Spec',
        'status' => 'Status',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'tenantId' => 'TenantId',
        'vccId' => 'VccId',
        'vccName' => 'VccName',
        'vpcId' => 'VpcId',
        'vpdBaseInfo' => 'VpdBaseInfo',
        'vpdId' => 'VpdId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->erInfos)) {
            Model::validateArray($this->erInfos);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->vpdBaseInfo) {
            $this->vpdBaseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->erInfos)) {
                $res['ErInfos'] = [];
                $n1 = 0;
                foreach ($this->erInfos as $item1) {
                    $res['ErInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toArray($noStream) : $this->vpdBaseInfo;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
                $n1 = 0;
                foreach ($map['ErInfos'] as $item1) {
                    $model->erInfos[$n1++] = erInfos::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
