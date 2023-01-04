<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example c102fe5f1ee5d4c87a68121a77d8b0f38
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description A log of the master instance.
     *
     * @example Cluster Created
     *
     * @var string
     */
    public $clusterLog;

    /**
     * @description The time when the log was created. Format: <i>yyyy-mm-dd</i>t<i>hh:mm:ss</i>z (UTC time).
     *
     * @example 2021-12-02T11:48:15+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The severity level of the log. Valid values: - error: errors. - warn: warnings. - info: information.
     *
     * @example INFO
     *
     * @var string
     */
    public $logLevel;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'clusterLog'   => 'ClusterLog',
        'creationTime' => 'CreationTime',
        'logLevel'     => 'LogLevel',
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
        if (null !== $this->clusterLog) {
            $res['ClusterLog'] = $this->clusterLog;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterLog'])) {
            $model->clusterLog = $map['ClusterLog'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }

        return $model;
    }
}
