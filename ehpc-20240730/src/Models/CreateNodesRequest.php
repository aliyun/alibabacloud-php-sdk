<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class CreateNodesRequest extends Model
{
    /**
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var NodeTemplate
     */
    public $computeNode;

    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example vpc
     *
     * @var string
     */
    public $HPCInterConnect;

    /**
     * @example compute
     *
     * @var string
     */
    public $hostnamePrefix;

    /**
     * @example demo
     *
     * @var string
     */
    public $hostnameSuffix;

    /**
     * @example false
     *
     * @var string
     */
    public $keepAlive;

    /**
     * @example test1
     *
     * @var string
     */
    public $queueName;

    /**
     * @example AliyunServiceRoleForOOSBandwidthScheduler
     *
     * @var string
     */
    public $ramRole;

    /**
     * @example vsw-bp1lfcjbfb099rrjn****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'computeNode'     => 'ComputeNode',
        'count'           => 'Count',
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
