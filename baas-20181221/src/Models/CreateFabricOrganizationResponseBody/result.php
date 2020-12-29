<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\CreateFabricOrganizationResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $peerCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $consortiumCount;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $serviceState;

    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $clusterState;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $ownerBid;

    /**
     * @var string
     */
    public $organizationDescription;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $userCount;

    /**
     * @var string
     */
    public $organizationName;
    protected $_name = [
        'domain'                  => 'Domain',
        'peerCount'               => 'PeerCount',
        'createTime'              => 'CreateTime',
        'consortiumCount'         => 'ConsortiumCount',
        'specName'                => 'SpecName',
        'ownerName'               => 'OwnerName',
        'serviceState'            => 'ServiceState',
        'ownerUid'                => 'OwnerUid',
        'clusterState'            => 'ClusterState',
        'codeName'                => 'CodeName',
        'ownerBid'                => 'OwnerBid',
        'organizationDescription' => 'OrganizationDescription',
        'regionId'                => 'RegionId',
        'organizationId'          => 'OrganizationId',
        'requestId'               => 'RequestId',
        'zoneId'                  => 'ZoneId',
        'userCount'               => 'UserCount',
        'organizationName'        => 'OrganizationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->peerCount) {
            $res['PeerCount'] = $this->peerCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->consortiumCount) {
            $res['ConsortiumCount'] = $this->consortiumCount;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->serviceState) {
            $res['ServiceState'] = $this->serviceState;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->clusterState) {
            $res['ClusterState'] = $this->clusterState;
        }
        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }
        if (null !== $this->ownerBid) {
            $res['OwnerBid'] = $this->ownerBid;
        }
        if (null !== $this->organizationDescription) {
            $res['OrganizationDescription'] = $this->organizationDescription;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->userCount) {
            $res['UserCount'] = $this->userCount;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['PeerCount'])) {
            $model->peerCount = $map['PeerCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ConsortiumCount'])) {
            $model->consortiumCount = $map['ConsortiumCount'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['ServiceState'])) {
            $model->serviceState = $map['ServiceState'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['ClusterState'])) {
            $model->clusterState = $map['ClusterState'];
        }
        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }
        if (isset($map['OwnerBid'])) {
            $model->ownerBid = $map['OwnerBid'];
        }
        if (isset($map['OrganizationDescription'])) {
            $model->organizationDescription = $map['OrganizationDescription'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = $map['UserCount'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }

        return $model;
    }
}
