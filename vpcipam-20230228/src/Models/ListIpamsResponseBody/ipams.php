<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamsResponseBody\ipams\tags;
use AlibabaCloud\Tea\Model;

class ipams extends Model
{
    /**
     * @example 2022-07-01T02:05:23Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test description
     *
     * @var string
     */
    public $ipamDescription;

    /**
     * @example ipam-ccxbnsbhew0d6t****
     *
     * @var string
     */
    public $ipamId;

    /**
     * @example test
     *
     * @var string
     */
    public $ipamName;

    /**
     * @example Created
     *
     * @var string
     */
    public $ipamStatus;

    /**
     * @var string[]
     */
    public $operatingRegionList;

    /**
     * @example 1210123456******
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example ipam-scope-okoerbco6unqfr****
     *
     * @var string
     */
    public $privateDefaultScopeId;

    /**
     * @example ipam-scope-ovb76p1g1m19dr****
     *
     * @var string
     */
    public $publicDefaultScopeId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aek2dbprgpt****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 2
     *
     * @var int
     */
    public $scopeCount;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'ipamDescription'       => 'IpamDescription',
        'ipamId'                => 'IpamId',
        'ipamName'              => 'IpamName',
        'ipamStatus'            => 'IpamStatus',
        'operatingRegionList'   => 'OperatingRegionList',
        'ownerId'               => 'OwnerId',
        'privateDefaultScopeId' => 'PrivateDefaultScopeId',
        'publicDefaultScopeId'  => 'PublicDefaultScopeId',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'scopeCount'            => 'ScopeCount',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ScopeCount'])) {
            $model->scopeCount = $map['ScopeCount'];
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

        return $model;
    }
}
