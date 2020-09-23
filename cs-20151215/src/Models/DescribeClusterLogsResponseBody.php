<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterLogsResponseBody extends Model
{
    /**
     * @description 日志ID。
     *
     * @var string
     */
    public $ID;

    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 日志详情。
     *
     * @var string
     */
    public $clusterLog;

    /**
     * @description 日志创建时间。
     *
     * @var string
     */
    public $created;

    /**
     * @description 日志级别。
     *
     * @var string
     */
    public $logLevel;

    /**
     * @description 日志更新时间。
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'ID'         => 'ID',
        'clusterId'  => 'cluster_id',
        'clusterLog' => 'cluster_log',
        'created'    => 'created',
        'logLevel'   => 'log_level',
        'updated'    => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterLog) {
            $res['cluster_log'] = $this->clusterLog;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->logLevel) {
            $res['log_level'] = $this->logLevel;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_log'])) {
            $model->clusterLog = $map['cluster_log'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['log_level'])) {
            $model->logLevel = $map['log_level'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
