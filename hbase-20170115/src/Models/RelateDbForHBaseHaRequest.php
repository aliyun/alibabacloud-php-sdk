<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Tea\Model;

class RelateDbForHBaseHaRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $haActive;

    /**
     * @var string
     */
    public $haActiveClusterKey;

    /**
     * @var string
     */
    public $haActiveDBType;

    /**
     * @var string
     */
    public $haActiveHbaseFsDir;

    /**
     * @var string
     */
    public $haActiveHdfsUri;

    /**
     * @var string
     */
    public $haActivePassword;

    /**
     * @var string
     */
    public $haActiveUser;

    /**
     * @var string
     */
    public $haActiveVersion;

    /**
     * @var string
     */
    public $haMigrateType;

    /**
     * @var string
     */
    public $haStandby;

    /**
     * @var string
     */
    public $haStandbyClusterKey;

    /**
     * @var string
     */
    public $haStandbyDBType;

    /**
     * @var string
     */
    public $haStandbyHbaseFsDir;

    /**
     * @var string
     */
    public $haStandbyHdfsUri;

    /**
     * @var string
     */
    public $haStandbyPassword;

    /**
     * @var string
     */
    public $haStandbyUser;

    /**
     * @var string
     */
    public $haStandbyVersion;

    /**
     * @var string
     */
    public $haTables;

    /**
     * @var bool
     */
    public $isActiveStandard;

    /**
     * @var bool
     */
    public $isStandbyStandard;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'            => 'ClusterId',
        'haActive'             => 'HaActive',
        'haActiveClusterKey'   => 'HaActiveClusterKey',
        'haActiveDBType'       => 'HaActiveDBType',
        'haActiveHbaseFsDir'   => 'HaActiveHbaseFsDir',
        'haActiveHdfsUri'      => 'HaActiveHdfsUri',
        'haActivePassword'     => 'HaActivePassword',
        'haActiveUser'         => 'HaActiveUser',
        'haActiveVersion'      => 'HaActiveVersion',
        'haMigrateType'        => 'HaMigrateType',
        'haStandby'            => 'HaStandby',
        'haStandbyClusterKey'  => 'HaStandbyClusterKey',
        'haStandbyDBType'      => 'HaStandbyDBType',
        'haStandbyHbaseFsDir'  => 'HaStandbyHbaseFsDir',
        'haStandbyHdfsUri'     => 'HaStandbyHdfsUri',
        'haStandbyPassword'    => 'HaStandbyPassword',
        'haStandbyUser'        => 'HaStandbyUser',
        'haStandbyVersion'     => 'HaStandbyVersion',
        'haTables'             => 'HaTables',
        'isActiveStandard'     => 'IsActiveStandard',
        'isStandbyStandard'    => 'IsStandbyStandard',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->haActive) {
            $res['HaActive'] = $this->haActive;
        }
        if (null !== $this->haActiveClusterKey) {
            $res['HaActiveClusterKey'] = $this->haActiveClusterKey;
        }
        if (null !== $this->haActiveDBType) {
            $res['HaActiveDBType'] = $this->haActiveDBType;
        }
        if (null !== $this->haActiveHbaseFsDir) {
            $res['HaActiveHbaseFsDir'] = $this->haActiveHbaseFsDir;
        }
        if (null !== $this->haActiveHdfsUri) {
            $res['HaActiveHdfsUri'] = $this->haActiveHdfsUri;
        }
        if (null !== $this->haActivePassword) {
            $res['HaActivePassword'] = $this->haActivePassword;
        }
        if (null !== $this->haActiveUser) {
            $res['HaActiveUser'] = $this->haActiveUser;
        }
        if (null !== $this->haActiveVersion) {
            $res['HaActiveVersion'] = $this->haActiveVersion;
        }
        if (null !== $this->haMigrateType) {
            $res['HaMigrateType'] = $this->haMigrateType;
        }
        if (null !== $this->haStandby) {
            $res['HaStandby'] = $this->haStandby;
        }
        if (null !== $this->haStandbyClusterKey) {
            $res['HaStandbyClusterKey'] = $this->haStandbyClusterKey;
        }
        if (null !== $this->haStandbyDBType) {
            $res['HaStandbyDBType'] = $this->haStandbyDBType;
        }
        if (null !== $this->haStandbyHbaseFsDir) {
            $res['HaStandbyHbaseFsDir'] = $this->haStandbyHbaseFsDir;
        }
        if (null !== $this->haStandbyHdfsUri) {
            $res['HaStandbyHdfsUri'] = $this->haStandbyHdfsUri;
        }
        if (null !== $this->haStandbyPassword) {
            $res['HaStandbyPassword'] = $this->haStandbyPassword;
        }
        if (null !== $this->haStandbyUser) {
            $res['HaStandbyUser'] = $this->haStandbyUser;
        }
        if (null !== $this->haStandbyVersion) {
            $res['HaStandbyVersion'] = $this->haStandbyVersion;
        }
        if (null !== $this->haTables) {
            $res['HaTables'] = $this->haTables;
        }
        if (null !== $this->isActiveStandard) {
            $res['IsActiveStandard'] = $this->isActiveStandard;
        }
        if (null !== $this->isStandbyStandard) {
            $res['IsStandbyStandard'] = $this->isStandbyStandard;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RelateDbForHBaseHaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HaActive'])) {
            $model->haActive = $map['HaActive'];
        }
        if (isset($map['HaActiveClusterKey'])) {
            $model->haActiveClusterKey = $map['HaActiveClusterKey'];
        }
        if (isset($map['HaActiveDBType'])) {
            $model->haActiveDBType = $map['HaActiveDBType'];
        }
        if (isset($map['HaActiveHbaseFsDir'])) {
            $model->haActiveHbaseFsDir = $map['HaActiveHbaseFsDir'];
        }
        if (isset($map['HaActiveHdfsUri'])) {
            $model->haActiveHdfsUri = $map['HaActiveHdfsUri'];
        }
        if (isset($map['HaActivePassword'])) {
            $model->haActivePassword = $map['HaActivePassword'];
        }
        if (isset($map['HaActiveUser'])) {
            $model->haActiveUser = $map['HaActiveUser'];
        }
        if (isset($map['HaActiveVersion'])) {
            $model->haActiveVersion = $map['HaActiveVersion'];
        }
        if (isset($map['HaMigrateType'])) {
            $model->haMigrateType = $map['HaMigrateType'];
        }
        if (isset($map['HaStandby'])) {
            $model->haStandby = $map['HaStandby'];
        }
        if (isset($map['HaStandbyClusterKey'])) {
            $model->haStandbyClusterKey = $map['HaStandbyClusterKey'];
        }
        if (isset($map['HaStandbyDBType'])) {
            $model->haStandbyDBType = $map['HaStandbyDBType'];
        }
        if (isset($map['HaStandbyHbaseFsDir'])) {
            $model->haStandbyHbaseFsDir = $map['HaStandbyHbaseFsDir'];
        }
        if (isset($map['HaStandbyHdfsUri'])) {
            $model->haStandbyHdfsUri = $map['HaStandbyHdfsUri'];
        }
        if (isset($map['HaStandbyPassword'])) {
            $model->haStandbyPassword = $map['HaStandbyPassword'];
        }
        if (isset($map['HaStandbyUser'])) {
            $model->haStandbyUser = $map['HaStandbyUser'];
        }
        if (isset($map['HaStandbyVersion'])) {
            $model->haStandbyVersion = $map['HaStandbyVersion'];
        }
        if (isset($map['HaTables'])) {
            $model->haTables = $map['HaTables'];
        }
        if (isset($map['IsActiveStandard'])) {
            $model->isActiveStandard = $map['IsActiveStandard'];
        }
        if (isset($map['IsStandbyStandard'])) {
            $model->isStandbyStandard = $map['IsStandbyStandard'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
