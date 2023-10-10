<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationResponseBody;

use AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example client
     *
     * @var string
     */
    public $CANAME;

    /**
     * @example https://ca1.org1.alibabacloudbaas.com:31154
     *
     * @var string
     */
    public $CAUrl;

    /**
     * @example org1
     *
     * @var string
     */
    public $codeName;

    /**
     * @example 2
     *
     * @var int
     */
    public $consortiumCount;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $createTime;

    /**
     * @example org1.alibabacloudbaas.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example org1MSP
     *
     * @var string
     */
    public $MSP;

    /**
     * @example This is org1
     *
     * @var string
     */
    public $organizationDescription;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example org1
     *
     * @var string
     */
    public $organizationName;

    /**
     * @example 2544
     *
     * @var string
     */
    public $ownerBid;

    /**
     * @example uid-23434
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 23434
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @example 2
     *
     * @var int
     */
    public $peerCount;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1890FA4F-067A-4CE9-AC9B-2BD2E58FB5D3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example basic
     *
     * @var string
     */
    public $specName;

    /**
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 2
     *
     * @var int
     */
    public $userCount;

    /**
     * @example cn-hangzhou-1a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'CANAME'                  => 'CANAME',
        'CAUrl'                   => 'CAUrl',
        'codeName'                => 'CodeName',
        'consortiumCount'         => 'ConsortiumCount',
        'createTime'              => 'CreateTime',
        'domain'                  => 'Domain',
        'MSP'                     => 'MSP',
        'organizationDescription' => 'OrganizationDescription',
        'organizationId'          => 'OrganizationId',
        'organizationName'        => 'OrganizationName',
        'ownerBid'                => 'OwnerBid',
        'ownerName'               => 'OwnerName',
        'ownerUid'                => 'OwnerUid',
        'peerCount'               => 'PeerCount',
        'regionId'                => 'RegionId',
        'requestId'               => 'RequestId',
        'specName'                => 'SpecName',
        'state'                   => 'State',
        'tags'                    => 'Tags',
        'userCount'               => 'UserCount',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CANAME) {
            $res['CANAME'] = $this->CANAME;
        }
        if (null !== $this->CAUrl) {
            $res['CAUrl'] = $this->CAUrl;
        }
        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }
        if (null !== $this->consortiumCount) {
            $res['ConsortiumCount'] = $this->consortiumCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->MSP) {
            $res['MSP'] = $this->MSP;
        }
        if (null !== $this->organizationDescription) {
            $res['OrganizationDescription'] = $this->organizationDescription;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->peerCount) {
            $res['PeerCount'] = $this->peerCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CANAME'])) {
            $model->CANAME = $map['CANAME'];
        }
        if (isset($map['CAUrl'])) {
            $model->CAUrl = $map['CAUrl'];
        }
        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }
        if (isset($map['ConsortiumCount'])) {
            $model->consortiumCount = $map['ConsortiumCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['MSP'])) {
            $model->MSP = $map['MSP'];
        }
        if (isset($map['OrganizationDescription'])) {
            $model->organizationDescription = $map['OrganizationDescription'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['PeerCount'])) {
            $model->peerCount = $map['PeerCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
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
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
