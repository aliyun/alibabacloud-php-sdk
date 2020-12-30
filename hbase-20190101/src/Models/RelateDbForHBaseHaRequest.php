<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

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
    public $haTables;

    /**
     * @var string
     */
    public $haActiveHdfsUri;

    /**
     * @var string
     */
    public $haActiveHbaseFsDir;

    /**
     * @var string
     */
    public $haActiveClusterKey;

    /**
     * @var string
     */
    public $haActiveVersion;

    /**
     * @var string
     */
    public $haActiveUser;

    /**
     * @var string
     */
    public $haActivePassword;

    /**
     * @var string
     */
    public $haStandbyHdfsUri;

    /**
     * @var string
     */
    public $haStandbyHbaseFsDir;

    /**
     * @var string
     */
    public $haStandbyClusterKey;

    /**
     * @var string
     */
    public $haStandbyVersion;

    /**
     * @var string
     */
    public $haStandbyUser;

    /**
     * @var string
     */
    public $haStandbyPassword;

    /**
     * @var string
     */
    public $haActive;

    /**
     * @var string
     */
    public $haStandby;

    /**
     * @var string
     */
    public $haActiveDBType;

    /**
     * @var string
     */
    public $haStandbyDBType;

    /**
     * @var bool
     */
    public $isActiveStandard;

    /**
     * @var bool
     */
    public $isStandbyStandard;

    /**
     * @var string
     */
    public $haMigrateType;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'haTables'            => 'HaTables',
        'haActiveHdfsUri'     => 'HaActiveHdfsUri',
        'haActiveHbaseFsDir'  => 'HaActiveHbaseFsDir',
        'haActiveClusterKey'  => 'HaActiveClusterKey',
        'haActiveVersion'     => 'HaActiveVersion',
        'haActiveUser'        => 'HaActiveUser',
        'haActivePassword'    => 'HaActivePassword',
        'haStandbyHdfsUri'    => 'HaStandbyHdfsUri',
        'haStandbyHbaseFsDir' => 'HaStandbyHbaseFsDir',
        'haStandbyClusterKey' => 'HaStandbyClusterKey',
        'haStandbyVersion'    => 'HaStandbyVersion',
        'haStandbyUser'       => 'HaStandbyUser',
        'haStandbyPassword'   => 'HaStandbyPassword',
        'haActive'            => 'HaActive',
        'haStandby'           => 'HaStandby',
        'haActiveDBType'      => 'HaActiveDBType',
        'haStandbyDBType'     => 'HaStandbyDBType',
        'isActiveStandard'    => 'IsActiveStandard',
        'isStandbyStandard'   => 'IsStandbyStandard',
        'haMigrateType'       => 'HaMigrateType',
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
        if (null !== $this->haTables) {
            $res['HaTables'] = $this->haTables;
        }
        if (null !== $this->haActiveHdfsUri) {
            $res['HaActiveHdfsUri'] = $this->haActiveHdfsUri;
        }
        if (null !== $this->haActiveHbaseFsDir) {
            $res['HaActiveHbaseFsDir'] = $this->haActiveHbaseFsDir;
        }
        if (null !== $this->haActiveClusterKey) {
            $res['HaActiveClusterKey'] = $this->haActiveClusterKey;
        }
        if (null !== $this->haActiveVersion) {
            $res['HaActiveVersion'] = $this->haActiveVersion;
        }
        if (null !== $this->haActiveUser) {
            $res['HaActiveUser'] = $this->haActiveUser;
        }
        if (null !== $this->haActivePassword) {
            $res['HaActivePassword'] = $this->haActivePassword;
        }
        if (null !== $this->haStandbyHdfsUri) {
            $res['HaStandbyHdfsUri'] = $this->haStandbyHdfsUri;
        }
        if (null !== $this->haStandbyHbaseFsDir) {
            $res['HaStandbyHbaseFsDir'] = $this->haStandbyHbaseFsDir;
        }
        if (null !== $this->haStandbyClusterKey) {
            $res['HaStandbyClusterKey'] = $this->haStandbyClusterKey;
        }
        if (null !== $this->haStandbyVersion) {
            $res['HaStandbyVersion'] = $this->haStandbyVersion;
        }
        if (null !== $this->haStandbyUser) {
            $res['HaStandbyUser'] = $this->haStandbyUser;
        }
        if (null !== $this->haStandbyPassword) {
            $res['HaStandbyPassword'] = $this->haStandbyPassword;
        }
        if (null !== $this->haActive) {
            $res['HaActive'] = $this->haActive;
        }
        if (null !== $this->haStandby) {
            $res['HaStandby'] = $this->haStandby;
        }
        if (null !== $this->haActiveDBType) {
            $res['HaActiveDBType'] = $this->haActiveDBType;
        }
        if (null !== $this->haStandbyDBType) {
            $res['HaStandbyDBType'] = $this->haStandbyDBType;
        }
        if (null !== $this->isActiveStandard) {
            $res['IsActiveStandard'] = $this->isActiveStandard;
        }
        if (null !== $this->isStandbyStandard) {
            $res['IsStandbyStandard'] = $this->isStandbyStandard;
        }
        if (null !== $this->haMigrateType) {
            $res['HaMigrateType'] = $this->haMigrateType;
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
        if (isset($map['HaTables'])) {
            $model->haTables = $map['HaTables'];
        }
        if (isset($map['HaActiveHdfsUri'])) {
            $model->haActiveHdfsUri = $map['HaActiveHdfsUri'];
        }
        if (isset($map['HaActiveHbaseFsDir'])) {
            $model->haActiveHbaseFsDir = $map['HaActiveHbaseFsDir'];
        }
        if (isset($map['HaActiveClusterKey'])) {
            $model->haActiveClusterKey = $map['HaActiveClusterKey'];
        }
        if (isset($map['HaActiveVersion'])) {
            $model->haActiveVersion = $map['HaActiveVersion'];
        }
        if (isset($map['HaActiveUser'])) {
            $model->haActiveUser = $map['HaActiveUser'];
        }
        if (isset($map['HaActivePassword'])) {
            $model->haActivePassword = $map['HaActivePassword'];
        }
        if (isset($map['HaStandbyHdfsUri'])) {
            $model->haStandbyHdfsUri = $map['HaStandbyHdfsUri'];
        }
        if (isset($map['HaStandbyHbaseFsDir'])) {
            $model->haStandbyHbaseFsDir = $map['HaStandbyHbaseFsDir'];
        }
        if (isset($map['HaStandbyClusterKey'])) {
            $model->haStandbyClusterKey = $map['HaStandbyClusterKey'];
        }
        if (isset($map['HaStandbyVersion'])) {
            $model->haStandbyVersion = $map['HaStandbyVersion'];
        }
        if (isset($map['HaStandbyUser'])) {
            $model->haStandbyUser = $map['HaStandbyUser'];
        }
        if (isset($map['HaStandbyPassword'])) {
            $model->haStandbyPassword = $map['HaStandbyPassword'];
        }
        if (isset($map['HaActive'])) {
            $model->haActive = $map['HaActive'];
        }
        if (isset($map['HaStandby'])) {
            $model->haStandby = $map['HaStandby'];
        }
        if (isset($map['HaActiveDBType'])) {
            $model->haActiveDBType = $map['HaActiveDBType'];
        }
        if (isset($map['HaStandbyDBType'])) {
            $model->haStandbyDBType = $map['HaStandbyDBType'];
        }
        if (isset($map['IsActiveStandard'])) {
            $model->isActiveStandard = $map['IsActiveStandard'];
        }
        if (isset($map['IsStandbyStandard'])) {
            $model->isStandbyStandard = $map['IsStandbyStandard'];
        }
        if (isset($map['HaMigrateType'])) {
            $model->haMigrateType = $map['HaMigrateType'];
        }

        return $model;
    }
}
