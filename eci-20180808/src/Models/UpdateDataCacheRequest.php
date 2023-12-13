<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheRequest\dataSource;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheRequest\eipCreateParam;
use AlibabaCloud\SDK\Eci\V20180808\Models\UpdateDataCacheRequest\tag;
use AlibabaCloud\Tea\Model;

class UpdateDataCacheRequest extends Model
{
    /**
     * @description The bucket in which the data cache is stored. Default value: default.
     *
     * @example default
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate a token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure the idempotence](~~25693~~).
     *
     * @example 2f22dc16-cad0-4d3f-87e5-91e604756547
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The data cache ID.
     *
     * @example edc-bp1a7n7uawwwol******
     *
     * @var string
     */
    public $dataCacheId;

    /**
     * @description The information about the data source.
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description The elastic IP address (EIP) to be created and associated. If no NAT gateway is configured for the virtual private cloud (VPC), you can associate an EIP to pull data from the Internet.
     *
     * @var eipCreateParam
     */
    public $eipCreateParam;

    /**
     * @description The ID of the elastic IP address (EIP). If no NAT gateway is configured for the virtual private cloud (VPC), you can bind an EIP to the elastic container instance to pull data from the Internet.
     *
     * @example eip-2zedsm5mfl3uhdj2d****
     *
     * @var string
     */
    public $eipInstanceId;

    /**
     * @description The data cache name.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzw2jz2z****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The retention period for the data cache. The data cache is deleted after the retention period expires. By default, the data cache does not expire.
     *
     * @example 7
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description The ID of the security group.
     *
     * @example sg-2ze81zoc3yl7a3we****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The data cache size.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The tags that are added to the data cache.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-2ze23nqzig8inprou****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'bucket'               => 'Bucket',
        'clientToken'          => 'ClientToken',
        'dataCacheId'          => 'DataCacheId',
        'dataSource'           => 'DataSource',
        'eipCreateParam'       => 'EipCreateParam',
        'eipInstanceId'        => 'EipInstanceId',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'retentionDays'        => 'RetentionDays',
        'securityGroupId'      => 'SecurityGroupId',
        'size'                 => 'Size',
        'tag'                  => 'Tag',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataCacheId) {
            $res['DataCacheId'] = $this->dataCacheId;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
        }
        if (null !== $this->eipCreateParam) {
            $res['EipCreateParam'] = null !== $this->eipCreateParam ? $this->eipCreateParam->toMap() : null;
        }
        if (null !== $this->eipInstanceId) {
            $res['EipInstanceId'] = $this->eipInstanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDataCacheRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataCacheId'])) {
            $model->dataCacheId = $map['DataCacheId'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }
        if (isset($map['EipCreateParam'])) {
            $model->eipCreateParam = eipCreateParam::fromMap($map['EipCreateParam']);
        }
        if (isset($map['EipInstanceId'])) {
            $model->eipInstanceId = $map['EipInstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
