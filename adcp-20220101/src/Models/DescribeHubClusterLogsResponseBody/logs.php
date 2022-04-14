<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterLog;

    /**
     * @var string
     */
    public $creationTime;

    /**
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
