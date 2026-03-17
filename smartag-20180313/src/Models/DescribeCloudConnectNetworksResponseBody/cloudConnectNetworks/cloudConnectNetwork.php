<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork\tags;

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
    public $associatedCloudBoxCount;

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
    protected $_name = [
        'associatedCenId' => 'AssociatedCenId',
        'associatedCenOwnerId' => 'AssociatedCenOwnerId',
        'associatedCloudBoxCount' => 'AssociatedCloudBoxCount',
        'availableCloudBoxCount' => 'AvailableCloudBoxCount',
        'ccnId' => 'CcnId',
        'cidrBlock' => 'CidrBlock',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'interworkingStatus' => 'InterworkingStatus',
        'name' => 'Name',
        'newAgw' => 'NewAgw',
        'resourceGroupId' => 'ResourceGroupId',
        'snatCidrBlock' => 'SnatCidrBlock',
        'subnet' => 'Subnet',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
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

        if (null !== $this->associatedCloudBoxCount) {
            $res['AssociatedCloudBoxCount'] = $this->associatedCloudBoxCount;
        }

        if (null !== $this->availableCloudBoxCount) {
            $res['AvailableCloudBoxCount'] = $this->availableCloudBoxCount;
        }

        if (null !== $this->ccnId) {
            $res['CcnId'] = $this->ccnId;
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

        if (isset($map['AssociatedCloudBoxCount'])) {
            $model->associatedCloudBoxCount = $map['AssociatedCloudBoxCount'];
        }

        if (isset($map['AvailableCloudBoxCount'])) {
            $model->availableCloudBoxCount = $map['AvailableCloudBoxCount'];
        }

        if (isset($map['CcnId'])) {
            $model->ccnId = $map['CcnId'];
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

        return $model;
    }
}
