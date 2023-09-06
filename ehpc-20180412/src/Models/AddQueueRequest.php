<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class AddQueueRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @example Standard
     *
     * @var string
     */
    public $networkInterfaceTrafficMode;

    /**
     * @description The name of the queue. The name must be 1 to 63 characters in length and start with a letter. It can contain letters, digits, and underscores (\_).
     *
     * @example test1
     *
     * @var string
     */
    public $queueName;

    /**
     * @var bool
     */
    public $useESS;
    protected $_name = [
        'clusterId'                   => 'ClusterId',
        'deploymentSetId'             => 'DeploymentSetId',
        'networkInterfaceTrafficMode' => 'NetworkInterfaceTrafficMode',
        'queueName'                   => 'QueueName',
        'useESS'                      => 'UseESS',
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
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->networkInterfaceTrafficMode) {
            $res['NetworkInterfaceTrafficMode'] = $this->networkInterfaceTrafficMode;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->useESS) {
            $res['UseESS'] = $this->useESS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['NetworkInterfaceTrafficMode'])) {
            $model->networkInterfaceTrafficMode = $map['NetworkInterfaceTrafficMode'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['UseESS'])) {
            $model->useESS = $map['UseESS'];
        }

        return $model;
    }
}
