<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeOutgoingAssetListResponseBody;

use AlibabaCloud\Dara\Model;

class assetList extends Model
{
    /**
     * @var string
     */
    public $assetInstanceId;

    /**
     * @var string
     */
    public $assetInstanceName;

    /**
     * @var string
     */
    public $assetsRegion;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var int
     */
    public $ipsHitCnt;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var int
     */
    public $outgoingDomainCnt;

    /**
     * @var int
     */
    public $outgoingDstIPCnt;

    /**
     * @var string
     */
    public $privateIP;

    /**
     * @var string[]
     */
    public $privateIPList;

    /**
     * @var string
     */
    public $publicIP;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $securityRisk;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $totalBytes;
    protected $_name = [
        'assetInstanceId' => 'AssetInstanceId',
        'assetInstanceName' => 'AssetInstanceName',
        'assetsRegion' => 'AssetsRegion',
        'groupName' => 'GroupName',
        'inBytes' => 'InBytes',
        'ipsHitCnt' => 'IpsHitCnt',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'outBytes' => 'OutBytes',
        'outgoingDomainCnt' => 'OutgoingDomainCnt',
        'outgoingDstIPCnt' => 'OutgoingDstIPCnt',
        'privateIP' => 'PrivateIP',
        'privateIPList' => 'PrivateIPList',
        'publicIP' => 'PublicIP',
        'resourceType' => 'ResourceType',
        'securityRisk' => 'SecurityRisk',
        'sessionCount' => 'SessionCount',
        'totalBytes' => 'TotalBytes',
    ];

    public function validate()
    {
        if (\is_array($this->privateIPList)) {
            Model::validateArray($this->privateIPList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetInstanceId) {
            $res['AssetInstanceId'] = $this->assetInstanceId;
        }

        if (null !== $this->assetInstanceName) {
            $res['AssetInstanceName'] = $this->assetInstanceName;
        }

        if (null !== $this->assetsRegion) {
            $res['AssetsRegion'] = $this->assetsRegion;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->ipsHitCnt) {
            $res['IpsHitCnt'] = $this->ipsHitCnt;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->outgoingDomainCnt) {
            $res['OutgoingDomainCnt'] = $this->outgoingDomainCnt;
        }

        if (null !== $this->outgoingDstIPCnt) {
            $res['OutgoingDstIPCnt'] = $this->outgoingDstIPCnt;
        }

        if (null !== $this->privateIP) {
            $res['PrivateIP'] = $this->privateIP;
        }

        if (null !== $this->privateIPList) {
            if (\is_array($this->privateIPList)) {
                $res['PrivateIPList'] = [];
                $n1 = 0;
                foreach ($this->privateIPList as $item1) {
                    $res['PrivateIPList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publicIP) {
            $res['PublicIP'] = $this->publicIP;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->securityRisk) {
            $res['SecurityRisk'] = $this->securityRisk;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
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
        if (isset($map['AssetInstanceId'])) {
            $model->assetInstanceId = $map['AssetInstanceId'];
        }

        if (isset($map['AssetInstanceName'])) {
            $model->assetInstanceName = $map['AssetInstanceName'];
        }

        if (isset($map['AssetsRegion'])) {
            $model->assetsRegion = $map['AssetsRegion'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['IpsHitCnt'])) {
            $model->ipsHitCnt = $map['IpsHitCnt'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['OutgoingDomainCnt'])) {
            $model->outgoingDomainCnt = $map['OutgoingDomainCnt'];
        }

        if (isset($map['OutgoingDstIPCnt'])) {
            $model->outgoingDstIPCnt = $map['OutgoingDstIPCnt'];
        }

        if (isset($map['PrivateIP'])) {
            $model->privateIP = $map['PrivateIP'];
        }

        if (isset($map['PrivateIPList'])) {
            if (!empty($map['PrivateIPList'])) {
                $model->privateIPList = [];
                $n1 = 0;
                foreach ($map['PrivateIPList'] as $item1) {
                    $model->privateIPList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PublicIP'])) {
            $model->publicIP = $map['PublicIP'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SecurityRisk'])) {
            $model->securityRisk = $map['SecurityRisk'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        return $model;
    }
}
