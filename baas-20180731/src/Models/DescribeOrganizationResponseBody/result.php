<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example ca
     *
     * @var string
     */
    public $CAName;

    /**
     * @example asad
     *
     * @var string
     */
    public $CAUrl;

    /**
     * @example name
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
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @example Domain
     *
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @example name
     *
     * @var string
     */
    public $MSP;

    /**
     * @example Name
     *
     * @var string
     */
    public $name;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

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
     * @example zone
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'CAName'          => 'CAName',
        'CAUrl'           => 'CAUrl',
        'codeName'        => 'CodeName',
        'consortiumCount' => 'ConsortiumCount',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'domain'          => 'Domain',
        'expiredTime'     => 'ExpiredTime',
        'MSP'             => 'MSP',
        'name'            => 'Name',
        'organizationId'  => 'OrganizationId',
        'ownerBid'        => 'OwnerBid',
        'ownerName'       => 'OwnerName',
        'ownerUid'        => 'OwnerUid',
        'peerCount'       => 'PeerCount',
        'regionId'        => 'RegionId',
        'requestId'       => 'RequestId',
        'specName'        => 'SpecName',
        'state'           => 'State',
        'tags'            => 'Tags',
        'userCount'       => 'UserCount',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CAName) {
            $res['CAName'] = $this->CAName;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->MSP) {
            $res['MSP'] = $this->MSP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
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
        if (isset($map['CAName'])) {
            $model->CAName = $map['CAName'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['MSP'])) {
            $model->MSP = $map['MSP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
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
