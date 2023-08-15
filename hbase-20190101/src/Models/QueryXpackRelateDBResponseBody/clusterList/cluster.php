<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryXpackRelateDBResponseBody\clusterList;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @example hb-bp16o0pd52e3y582s
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example hbase_test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example hbase
     *
     * @var string
     */
    public $DBType;

    /**
     * @example 2.0
     *
     * @var string
     */
    public $DBVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $isRelated;

    /**
     * @example ..
     *
     * @var string
     */
    public $lockMode;

    /**
     * @example ACTIVATION
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'DBType'      => 'DBType',
        'DBVersion'   => 'DBVersion',
        'isRelated'   => 'IsRelated',
        'lockMode'    => 'LockMode',
        'status'      => 'Status',
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
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->isRelated) {
            $res['IsRelated'] = $this->isRelated;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['IsRelated'])) {
            $model->isRelated = $map['IsRelated'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
