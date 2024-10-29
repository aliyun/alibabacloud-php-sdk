<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveriesResponseBody;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveriesResponseBody\ipamResourceDiscoveries\tags;
use AlibabaCloud\Tea\Model;

class ipamResourceDiscoveries extends Model
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
    public $ipamResourceDiscoveryDescription;

    /**
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @example test
     *
     * @var string
     */
    public $ipamResourceDiscoveryName;

    /**
     * @example Created
     *
     * @var string
     */
    public $ipamResourceDiscoveryStatus;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-aek2sermdd6****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example system
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'createTime'                       => 'CreateTime',
        'ipamResourceDiscoveryDescription' => 'IpamResourceDiscoveryDescription',
        'ipamResourceDiscoveryId'          => 'IpamResourceDiscoveryId',
        'ipamResourceDiscoveryName'        => 'IpamResourceDiscoveryName',
        'ipamResourceDiscoveryStatus'      => 'IpamResourceDiscoveryStatus',
        'operatingRegionList'              => 'OperatingRegionList',
        'ownerId'                          => 'OwnerId',
        'regionId'                         => 'RegionId',
        'resourceGroupId'                  => 'ResourceGroupId',
        'tags'                             => 'Tags',
        'type'                             => 'Type',
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
        if (null !== $this->ipamResourceDiscoveryDescription) {
            $res['IpamResourceDiscoveryDescription'] = $this->ipamResourceDiscoveryDescription;
        }
        if (null !== $this->ipamResourceDiscoveryId) {
            $res['IpamResourceDiscoveryId'] = $this->ipamResourceDiscoveryId;
        }
        if (null !== $this->ipamResourceDiscoveryName) {
            $res['IpamResourceDiscoveryName'] = $this->ipamResourceDiscoveryName;
        }
        if (null !== $this->ipamResourceDiscoveryStatus) {
            $res['IpamResourceDiscoveryStatus'] = $this->ipamResourceDiscoveryStatus;
        }
        if (null !== $this->operatingRegionList) {
            $res['OperatingRegionList'] = $this->operatingRegionList;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipamResourceDiscoveries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IpamResourceDiscoveryDescription'])) {
            $model->ipamResourceDiscoveryDescription = $map['IpamResourceDiscoveryDescription'];
        }
        if (isset($map['IpamResourceDiscoveryId'])) {
            $model->ipamResourceDiscoveryId = $map['IpamResourceDiscoveryId'];
        }
        if (isset($map['IpamResourceDiscoveryName'])) {
            $model->ipamResourceDiscoveryName = $map['IpamResourceDiscoveryName'];
        }
        if (isset($map['IpamResourceDiscoveryStatus'])) {
            $model->ipamResourceDiscoveryStatus = $map['IpamResourceDiscoveryStatus'];
        }
        if (isset($map['OperatingRegionList'])) {
            if (!empty($map['OperatingRegionList'])) {
                $model->operatingRegionList = $map['OperatingRegionList'];
            }
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
