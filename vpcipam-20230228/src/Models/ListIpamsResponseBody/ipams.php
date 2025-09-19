<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponseBody\ipams\tags;

class ipams extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultResourceDiscoveryAssociationId;

    /**
     * @var string
     */
    public $defaultResourceDiscoveryId;

    /**
     * @var string
     */
    public $ipamDescription;

    /**
     * @var string
     */
    public $ipamId;

    /**
     * @var string
     */
    public $ipamName;

    /**
     * @var string
     */
    public $ipamStatus;

    /**
     * @var string[]
     */
    public $operatingRegionList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $privateDefaultScopeId;

    /**
     * @var string
     */
    public $publicDefaultScopeId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceDiscoveryAssociationCount;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $scopeCount;

    /**
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

    public function validate()
    {
        if (\is_array($this->operatingRegionList)) {
            Model::validateArray($this->operatingRegionList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->operatingRegionList)) {
                $res['OperatingRegionList'] = [];
                $n1 = 0;
                foreach ($this->operatingRegionList as $item1) {
                    $res['OperatingRegionList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $model->operatingRegionList = [];
                $n1 = 0;
                foreach ($map['OperatingRegionList'] as $item1) {
                    $model->operatingRegionList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
