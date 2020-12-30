<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryXpackRelateDBResponseBody\clusterList;

use AlibabaCloud\Tea\Model;

class cluster extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var bool
     */
    public $isRelated;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $lockMode;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'      => 'Status',
        'DBVersion'   => 'DBVersion',
        'isRelated'   => 'IsRelated',
        'clusterName' => 'ClusterName',
        'DBType'      => 'DBType',
        'lockMode'    => 'LockMode',
        'clusterId'   => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->isRelated) {
            $res['IsRelated'] = $this->isRelated;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['IsRelated'])) {
            $model->isRelated = $map['IsRelated'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
