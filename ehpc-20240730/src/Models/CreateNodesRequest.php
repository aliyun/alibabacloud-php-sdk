<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class CreateNodesRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * You can call the [ListClusters](https://help.aliyun.com/document_detail/87116.html) operation to query the cluster ID.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The hardware configurations of the compute nodes.
     *
     * @var NodeTemplate
     */
    public $computeNode;

    /**
     * @description The number of compute nodes that you want to add. Valid values: 1 to 99. The MinCount value must be smaller than the Count value.
     *
     *   If the number of available Elastic Compute Service (ECS) instances is smaller than the MinCount value, the nodes fail to be added.
     *   If the number of available ECS instances is larger than the MinCount value but smaller than the Count value, nodes are added based on the MinCount value.
     *   If the number of available ECS instances is larger than the Count value, nodes are added based on the Count value.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @description The type of the network between compute nodes. Valid values:
     *
     *   vpc
     *   eRDMA
     *
     * @example vpc
     *
     * @var string
     */
    public $HPCInterConnect;

    /**
     * @description The hostname prefix of the added compute nodes.
     *
     * @example compute
     *
     * @var string
     */
    public $hostnamePrefix;

    /**
     * @description The hostname suffix of the added compute nodes.
     *
     * @example demo
     *
     * @var string
     */
    public $hostnameSuffix;

    /**
     * @description Specifies whether to enable deletion protection for the added compute nodes.
     *
     * @example false
     *
     * @var string
     */
    public $keepAlive;

    /**
     * @description The name of the queue for which you want to create compute nodes.
     *
     * @example test1
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The Resource Access Management (RAM) role to be assumed by the added nodes.
     *
     * @example AliyunServiceRoleForOOSBandwidthScheduler
     *
     * @var string
     */
    public $ramRole;

    /**
     * @description The ID of the vSwitch to be used by the added nodes.
     *
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'computeNode'     => 'ComputeNode',
        'count'           => 'Count',
        'deploymentSetId' => 'DeploymentSetId',
        'HPCInterConnect' => 'HPCInterConnect',
        'hostnamePrefix'  => 'HostnamePrefix',
        'hostnameSuffix'  => 'HostnameSuffix',
        'keepAlive'       => 'KeepAlive',
        'queueName'       => 'QueueName',
        'ramRole'         => 'RamRole',
        'vSwitchId'       => 'VSwitchId',
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
        if (null !== $this->computeNode) {
            $res['ComputeNode'] = null !== $this->computeNode ? $this->computeNode->toMap() : null;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->deploymentSetId) {
            $res['DeploymentSetId'] = $this->deploymentSetId;
        }
        if (null !== $this->HPCInterConnect) {
            $res['HPCInterConnect'] = $this->HPCInterConnect;
        }
        if (null !== $this->hostnamePrefix) {
            $res['HostnamePrefix'] = $this->hostnamePrefix;
        }
        if (null !== $this->hostnameSuffix) {
            $res['HostnameSuffix'] = $this->hostnameSuffix;
        }
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComputeNode'])) {
            $model->computeNode = NodeTemplate::fromMap($map['ComputeNode']);
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DeploymentSetId'])) {
            $model->deploymentSetId = $map['DeploymentSetId'];
        }
        if (isset($map['HPCInterConnect'])) {
            $model->HPCInterConnect = $map['HPCInterConnect'];
        }
        if (isset($map['HostnamePrefix'])) {
            $model->hostnamePrefix = $map['HostnamePrefix'];
        }
        if (isset($map['HostnameSuffix'])) {
            $model->hostnameSuffix = $map['HostnameSuffix'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
