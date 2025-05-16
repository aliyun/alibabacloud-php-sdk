<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class CreateNodesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var NodeTemplate
     */
    public $computeNode;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $deploymentSetId;

    /**
     * @var string
     */
    public $HPCInterConnect;

    /**
     * @var string
     */
    public $hostnamePrefix;

    /**
     * @var string
     */
    public $hostnameSuffix;

    /**
     * @var string
     */
    public $keepAlive;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $reservedNodePoolId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'computeNode' => 'ComputeNode',
        'count' => 'Count',
        'deploymentSetId' => 'DeploymentSetId',
        'HPCInterConnect' => 'HPCInterConnect',
        'hostnamePrefix' => 'HostnamePrefix',
        'hostnameSuffix' => 'HostnameSuffix',
        'keepAlive' => 'KeepAlive',
        'queueName' => 'QueueName',
        'ramRole' => 'RamRole',
        'reservedNodePoolId' => 'ReservedNodePoolId',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (null !== $this->computeNode) {
            $this->computeNode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->computeNode) {
            $res['ComputeNode'] = null !== $this->computeNode ? $this->computeNode->toArray($noStream) : $this->computeNode;
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

        if (null !== $this->reservedNodePoolId) {
            $res['ReservedNodePoolId'] = $this->reservedNodePoolId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['ReservedNodePoolId'])) {
            $model->reservedNodePoolId = $map['ReservedNodePoolId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
