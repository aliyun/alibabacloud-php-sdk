<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class RelateDbForHBaseHaRequest extends Model
{
    /**
     * @example bds-t4nj9v2x85******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example hb-bp1w6krp539******
     *
     * @var string
     */
    public $haActive;

    /**
     * @example hb-t4naqsay5gn******-master1-001.hbase.singapore.rds.aliyuncs.com,hb-t4naqsay5gn******-master3-001.hbase.singapore.rds.aliyuncs.com,hb-t4naqsay5gn******-master2-001.hbase.singapore.rds.aliyuncs.com:2181:/hbase
     *
     * @var string
     */
    public $haActiveClusterKey;

    /**
     * @example hbase
     *
     * @var string
     */
    public $haActiveDBType;

    /**
     * @example /hbase
     *
     * @var string
     */
    public $haActiveHbaseFsDir;

    /**
     * @example hdfs://hb-t4naqsay5gn******-master1-001.hbase.rds.aliyuncs.com:8020,hb-t4naqsay5gn******-master2-001.hbase.rds.aliyuncs.com:8020
     *
     * @var string
     */
    public $haActiveHdfsUri;

    /**
     * @example root
     *
     * @var string
     */
    public $haActivePassword;

    /**
     * @example root
     *
     * @var string
     */
    public $haActiveUser;

    /**
     * @example HBase2x
     *
     * @var string
     */
    public $haActiveVersion;

    /**
     * @example CLUSTER
     *
     * @var string
     */
    public $haMigrateType;

    /**
     * @example hb-bp1bl7iqzka******
     *
     * @var string
     */
    public $haStandby;

    /**
     * @example hb-bp1w6krp539******-master1-001.hbase.singapore.rds.aliyuncs.com,hb-bp1w6krp539******-master3-001.hbase.singapore.rds.aliyuncs.com,hb-t4naqsay5gn******-master2-001.hbase.singapore.rds.aliyuncs.com:2181:/hbase
     *
     * @var string
     */
    public $haStandbyClusterKey;

    /**
     * @example hbase
     *
     * @var string
     */
    public $haStandbyDBType;

    /**
     * @example /hbase
     *
     * @var string
     */
    public $haStandbyHbaseFsDir;

    /**
     * @example hdfs://hb-bp1w6krp539******-master1-001.hbase.rds.aliyuncs.com:8020,hb-bp1w6krp539******-master2-001.hbase.rds.aliyuncs.com:8020
     *
     * @var string
     */
    public $haStandbyHdfsUri;

    /**
     * @example root
     *
     * @var string
     */
    public $haStandbyPassword;

    /**
     * @example root
     *
     * @var string
     */
    public $haStandbyUser;

    /**
     * @example HBase2x
     *
     * @var string
     */
    public $haStandbyVersion;

    /**
     * @example test,test1
     *
     * @var string
     */
    public $haTables;

    /**
     * @example true
     *
     * @var bool
     */
    public $isActiveStandard;

    /**
     * @example true
     *
     * @var bool
     */
    public $isStandbyStandard;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'haActive'            => 'HaActive',
        'haActiveClusterKey'  => 'HaActiveClusterKey',
        'haActiveDBType'      => 'HaActiveDBType',
        'haActiveHbaseFsDir'  => 'HaActiveHbaseFsDir',
        'haActiveHdfsUri'     => 'HaActiveHdfsUri',
        'haActivePassword'    => 'HaActivePassword',
        'haActiveUser'        => 'HaActiveUser',
        'haActiveVersion'     => 'HaActiveVersion',
        'haMigrateType'       => 'HaMigrateType',
        'haStandby'           => 'HaStandby',
        'haStandbyClusterKey' => 'HaStandbyClusterKey',
        'haStandbyDBType'     => 'HaStandbyDBType',
        'haStandbyHbaseFsDir' => 'HaStandbyHbaseFsDir',
        'haStandbyHdfsUri'    => 'HaStandbyHdfsUri',
        'haStandbyPassword'   => 'HaStandbyPassword',
        'haStandbyUser'       => 'HaStandbyUser',
        'haStandbyVersion'    => 'HaStandbyVersion',
        'haTables'            => 'HaTables',
        'isActiveStandard'    => 'IsActiveStandard',
        'isStandbyStandard'   => 'IsStandbyStandard',
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

        return $model;
    }
}
