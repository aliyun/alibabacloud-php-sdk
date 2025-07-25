<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponseBody\ipams\tags;
use AlibabaCloud\Tea\Model;

class ipams extends Model
{
    /**
     * @description The time when the IPAM was created.
     *
     * @example 2022-07-01T02:05:23Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Default resource discovery association ID.
     *
     * @example ipam-res-disco-assoc-jt5fac8twugdbbgip****
     *
     * @var string
     */
    public $defaultResourceDiscoveryAssociationId;

    /**
     * @description Default resource discovery instance ID.
     *
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $defaultResourceDiscoveryId;

    /**
     * @description The description of the IPAM.
     *
     * @example test description
     *
     * @var string
     */
    public $ipamDescription;

    /**
     * @description The ID of the IPAM.
     *
     * @example ipam-ccxbnsbhew0d6t****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @description The name of the IPAM.
     *
     * @example test
     *
     * @var string
     */
    public $ipamName;

    /**
     * @description The status of the IPAM. Valid values:
     *
     *   **Creating**
     *   **Created**
     *   **Deleting**
     *   **Deleted**
     *
     * @example Created
     *
     * @var string
     */
    public $ipamStatus;

    /**
     * @description The effective regions of the IPAM.
     *
     * @var string[]
     */
    public $operatingRegionList;

    /**
     * @description The Alibaba Cloud account that owns the IPAM.
     *
     * @example 1210123456******
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The default private scope created by the system after the IPAM is created.
     *
     * @example ipam-scope-okoerbco6unqfr****
     *
     * @var string
     */
    public $privateDefaultScopeId;

    /**
     * @description The default public scope created by the system after the IPAM is created.
     *
     * @example ipam-scope-ovb76p1g1m19dr****
     *
     * @var string
     */
    public $publicDefaultScopeId;

    /**
     * @description The region ID of the IPAM.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Number of resource discovery associations.
     *
     * @example 1
     *
     * @var int
     */
    public $resourceDiscoveryAssociationCount;

    /**
     * @description The resource group ID of the IPAM.
     *
     * @example rg-aek2dbprgpt****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The number of IPAM scopes. Value: **2 to 5**.
     *
     * @example 2
     *
     * @var int
     */
    public $scopeCount;

    /**
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultResourceDiscoveryAssociationId' => 'DefaultResourceDiscoveryAssociationId',
        'defaultResourceDiscoveryId' => 'DefaultResourceDiscoveryId',
        'ipamDescription' => 'IpamDescription',
        'ipamId' => 'IpamId',
        'ipamName' => 'IpamName',
        'ipamStatus' => 'IpamStatus',
        'operatingRegionList' => 'OperatingRegionList',
        'ownerId' => 'OwnerId',
        'privateDefaultScopeId' => 'PrivateDefaultScopeId',
        'publicDefaultScopeId' => 'PublicDefaultScopeId',
        'regionId' => 'RegionId',
        'resourceDiscoveryAssociationCount' => 'ResourceDiscoveryAssociationCount',
        'resourceGroupId' => 'ResourceGroupId',
        'scopeCount' => 'ScopeCount',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultResourceDiscoveryAssociationId) {
            $res['DefaultResourceDiscoveryAssociationId'] = $this->defaultResourceDiscoveryAssociationId;
        }
        if (null !== $this->defaultResourceDiscoveryId) {
            $res['DefaultResourceDiscoveryId'] = $this->defaultResourceDiscoveryId;
        }
        if (null !== $this->ipamDescription) {
            $res['IpamDescription'] = $this->ipamDescription;
        }
        if (null !== $this->ipamId) {
            $res['IpamId'] = $this->ipamId;
        }
        if (null !== $this->ipamName) {
            $res['IpamName'] = $this->ipamName;
        }
        if (null !== $this->ipamStatus) {
            $res['IpamStatus'] = $this->ipamStatus;
        }
        if (null !== $this->operatingRegionList) {
            $res['OperatingRegionList'] = $this->operatingRegionList;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->privateDefaultScopeId) {
            $res['PrivateDefaultScopeId'] = $this->privateDefaultScopeId;
        }
        if (null !== $this->publicDefaultScopeId) {
            $res['PublicDefaultScopeId'] = $this->publicDefaultScopeId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceDiscoveryAssociationCount) {
            $res['ResourceDiscoveryAssociationCount'] = $this->resourceDiscoveryAssociationCount;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scopeCount) {
            $res['ScopeCount'] = $this->scopeCount;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultResourceDiscoveryAssociationId'])) {
            $model->defaultResourceDiscoveryAssociationId = $map['DefaultResourceDiscoveryAssociationId'];
        }
        if (isset($map['DefaultResourceDiscoveryId'])) {
            $model->defaultResourceDiscoveryId = $map['DefaultResourceDiscoveryId'];
        }
        if (isset($map['IpamDescription'])) {
            $model->ipamDescription = $map['IpamDescription'];
        }
        if (isset($map['IpamId'])) {
            $model->ipamId = $map['IpamId'];
        }
        if (isset($map['IpamName'])) {
            $model->ipamName = $map['IpamName'];
        }
        if (isset($map['IpamStatus'])) {
            $model->ipamStatus = $map['IpamStatus'];
        }
        if (isset($map['OperatingRegionList'])) {
            if (!empty($map['OperatingRegionList'])) {
                $model->operatingRegionList = $map['OperatingRegionList'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateDefaultScopeId'])) {
            $model->privateDefaultScopeId = $map['PrivateDefaultScopeId'];
        }
        if (isset($map['PublicDefaultScopeId'])) {
            $model->publicDefaultScopeId = $map['PublicDefaultScopeId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceDiscoveryAssociationCount'])) {
            $model->resourceDiscoveryAssociationCount = $map['ResourceDiscoveryAssociationCount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScopeCount'])) {
            $model->scopeCount = $map['ScopeCount'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
