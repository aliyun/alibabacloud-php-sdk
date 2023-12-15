<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CreateOrganizationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example Pending
     *
     * @var string
     */
    public $clusterState;

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
     * @example Running
     *
     * @var string
     */
    public $serviceState;

    /**
     * @example basic
     *
     * @var string
     */
    public $specName;

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
        'clusterState'    => 'ClusterState',
        'codeName'        => 'CodeName',
        'consortiumCount' => 'ConsortiumCount',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'domain'          => 'Domain',
        'name'            => 'Name',
        'organizationId'  => 'OrganizationId',
        'ownerBid'        => 'OwnerBid',
        'ownerName'       => 'OwnerName',
        'ownerUid'        => 'OwnerUid',
        'peerCount'       => 'PeerCount',
        'regionId'        => 'RegionId',
        'requestId'       => 'RequestId',
        'serviceState'    => 'ServiceState',
        'specName'        => 'SpecName',
        'userCount'       => 'UserCount',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
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
        if (null !== $this->serviceState) {
            $res['ServiceState'] = $this->serviceState;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
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
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
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
        if (isset($map['ServiceState'])) {
            $model->serviceState = $map['ServiceState'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
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
