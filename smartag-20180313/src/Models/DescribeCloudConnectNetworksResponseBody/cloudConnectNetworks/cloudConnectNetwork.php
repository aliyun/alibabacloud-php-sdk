<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\tags;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\trNetworkConfig;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\vpcNetworkConfig;

class cloudConnectNetwork extends Model
{
    /**
     * @var string
     */
    public $associatedCenId;

    /**
     * @var string
     */
    public $associatedCenOwnerId;

    /**
     * @var string
     */
    public $associatedCenStatus;

    /**
     * @var string
     */
    public $associatedCloudBoxCount;

    /**
     * @var string
     */
    public $associatedVpcStatus;

    /**
     * @var string
     */
    public $availableCloudBoxCount;

    /**
     * @var string
     */
    public $ccnId;

    /**
     * @var string
     */
    public $cenStatusErrorCode;

    /**
     * @var string
     */
    public $cenStatusErrorMessage;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $interworkingStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $newAgw;

    /**
     * @var string
     */
    public $processingCenId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $snatCidrBlock;

    /**
     * @var string
     */
    public $subnet;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var trNetworkConfig
     */
    public $trNetworkConfig;

    /**
     * @var vpcNetworkConfig
     */
    public $vpcNetworkConfig;

    /**
     * @var string
     */
    public $vpcStatusErrorCode;

    /**
     * @var string
     */
    public $vpcStatusErrorMessage;
    protected $_name = [
        'associatedCenId' => 'AssociatedCenId',
        'associatedCenOwnerId' => 'AssociatedCenOwnerId',
        'associatedCenStatus' => 'AssociatedCenStatus',
        'associatedCloudBoxCount' => 'AssociatedCloudBoxCount',
        'associatedVpcStatus' => 'AssociatedVpcStatus',
        'availableCloudBoxCount' => 'AvailableCloudBoxCount',
        'ccnId' => 'CcnId',
        'cenStatusErrorCode' => 'CenStatusErrorCode',
        'cenStatusErrorMessage' => 'CenStatusErrorMessage',
        'cidrBlock' => 'CidrBlock',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'interworkingStatus' => 'InterworkingStatus',
        'name' => 'Name',
        'newAgw' => 'NewAgw',
        'processingCenId' => 'ProcessingCenId',
        'resourceGroupId' => 'ResourceGroupId',
        'snatCidrBlock' => 'SnatCidrBlock',
        'subnet' => 'Subnet',
        'tags' => 'Tags',
        'trNetworkConfig' => 'TrNetworkConfig',
        'vpcNetworkConfig' => 'VpcNetworkConfig',
        'vpcStatusErrorCode' => 'VpcStatusErrorCode',
        'vpcStatusErrorMessage' => 'VpcStatusErrorMessage',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->trNetworkConfig) {
            $this->trNetworkConfig->validate();
        }
        if (null !== $this->vpcNetworkConfig) {
            $this->vpcNetworkConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedCenId) {
            $res['AssociatedCenId'] = $this->associatedCenId;
        }

        if (null !== $this->associatedCenOwnerId) {
            $res['AssociatedCenOwnerId'] = $this->associatedCenOwnerId;
        }

        if (null !== $this->associatedCenStatus) {
            $res['AssociatedCenStatus'] = $this->associatedCenStatus;
        }

        if (null !== $this->associatedCloudBoxCount) {
            $res['AssociatedCloudBoxCount'] = $this->associatedCloudBoxCount;
        }

        if (null !== $this->associatedVpcStatus) {
            $res['AssociatedVpcStatus'] = $this->associatedVpcStatus;
        }

        if (null !== $this->availableCloudBoxCount) {
            $res['AvailableCloudBoxCount'] = $this->availableCloudBoxCount;
        }

        if (null !== $this->ccnId) {
            $res['CcnId'] = $this->ccnId;
        }

        if (null !== $this->cenStatusErrorCode) {
            $res['CenStatusErrorCode'] = $this->cenStatusErrorCode;
        }

        if (null !== $this->cenStatusErrorMessage) {
            $res['CenStatusErrorMessage'] = $this->cenStatusErrorMessage;
        }

        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->interworkingStatus) {
            $res['InterworkingStatus'] = $this->interworkingStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->newAgw) {
            $res['NewAgw'] = $this->newAgw;
        }

        if (null !== $this->processingCenId) {
            $res['ProcessingCenId'] = $this->processingCenId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->snatCidrBlock) {
            $res['SnatCidrBlock'] = $this->snatCidrBlock;
        }

        if (null !== $this->subnet) {
            $res['Subnet'] = $this->subnet;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->trNetworkConfig) {
            $res['TrNetworkConfig'] = null !== $this->trNetworkConfig ? $this->trNetworkConfig->toArray($noStream) : $this->trNetworkConfig;
        }

        if (null !== $this->vpcNetworkConfig) {
            $res['VpcNetworkConfig'] = null !== $this->vpcNetworkConfig ? $this->vpcNetworkConfig->toArray($noStream) : $this->vpcNetworkConfig;
        }

        if (null !== $this->vpcStatusErrorCode) {
            $res['VpcStatusErrorCode'] = $this->vpcStatusErrorCode;
        }

        if (null !== $this->vpcStatusErrorMessage) {
            $res['VpcStatusErrorMessage'] = $this->vpcStatusErrorMessage;
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
        if (isset($map['AssociatedCenId'])) {
            $model->associatedCenId = $map['AssociatedCenId'];
        }

        if (isset($map['AssociatedCenOwnerId'])) {
            $model->associatedCenOwnerId = $map['AssociatedCenOwnerId'];
        }

        if (isset($map['AssociatedCenStatus'])) {
            $model->associatedCenStatus = $map['AssociatedCenStatus'];
        }

        if (isset($map['AssociatedCloudBoxCount'])) {
            $model->associatedCloudBoxCount = $map['AssociatedCloudBoxCount'];
        }

        if (isset($map['AssociatedVpcStatus'])) {
            $model->associatedVpcStatus = $map['AssociatedVpcStatus'];
        }

        if (isset($map['AvailableCloudBoxCount'])) {
            $model->availableCloudBoxCount = $map['AvailableCloudBoxCount'];
        }

        if (isset($map['CcnId'])) {
            $model->ccnId = $map['CcnId'];
        }

        if (isset($map['CenStatusErrorCode'])) {
            $model->cenStatusErrorCode = $map['CenStatusErrorCode'];
        }

        if (isset($map['CenStatusErrorMessage'])) {
            $model->cenStatusErrorMessage = $map['CenStatusErrorMessage'];
        }

        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InterworkingStatus'])) {
            $model->interworkingStatus = $map['InterworkingStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NewAgw'])) {
            $model->newAgw = $map['NewAgw'];
        }

        if (isset($map['ProcessingCenId'])) {
            $model->processingCenId = $map['ProcessingCenId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SnatCidrBlock'])) {
            $model->snatCidrBlock = $map['SnatCidrBlock'];
        }

        if (isset($map['Subnet'])) {
            $model->subnet = $map['Subnet'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['TrNetworkConfig'])) {
            $model->trNetworkConfig = trNetworkConfig::fromMap($map['TrNetworkConfig']);
        }

        if (isset($map['VpcNetworkConfig'])) {
            $model->vpcNetworkConfig = vpcNetworkConfig::fromMap($map['VpcNetworkConfig']);
        }

        if (isset($map['VpcStatusErrorCode'])) {
            $model->vpcStatusErrorCode = $map['VpcStatusErrorCode'];
        }

        if (isset($map['VpcStatusErrorMessage'])) {
            $model->vpcStatusErrorMessage = $map['VpcStatusErrorMessage'];
        }

        return $model;
    }
}
