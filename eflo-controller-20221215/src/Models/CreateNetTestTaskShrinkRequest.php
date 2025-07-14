<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateNetTestTaskShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i119982311660892626523
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster name.
     *
     * @example Eflo-YJ-Test-Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Specify when NetTestType is CommTest.
     *
     * @var string
     */
    public $commTestShrink;

    /**
     * @description Specify when NetTestType is DelayTest.
     *
     * @var string
     */
    public $delayTestShrink;

    /**
     * @description The type of the network test. Valid values: DelayTest, TrafficTest, and CommTest.
     *
     * @example DelayTest
     *
     * @var string
     */
    public $netTestType;

    /**
     * @description The network mode.
     *
     * @example 2
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description The port number.
     *
     * @example 23604
     *
     * @var string
     */
    public $port;

    /**
     * @description If the TrafficModel is Fullmesh, leave this parameter empty.
     *
     * @var string
     */
    public $trafficTestShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'commTestShrink' => 'CommTest',
        'delayTestShrink' => 'DelayTest',
        'netTestType' => 'NetTestType',
        'networkMode' => 'NetworkMode',
        'port' => 'Port',
        'trafficTestShrink' => 'TrafficTest',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->commTestShrink) {
            $res['CommTest'] = $this->commTestShrink;
        }
        if (null !== $this->delayTestShrink) {
            $res['DelayTest'] = $this->delayTestShrink;
        }
        if (null !== $this->netTestType) {
            $res['NetTestType'] = $this->netTestType;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->trafficTestShrink) {
            $res['TrafficTest'] = $this->trafficTestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetTestTaskShrinkRequest
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
        if (isset($map['CommTest'])) {
            $model->commTestShrink = $map['CommTest'];
        }
        if (isset($map['DelayTest'])) {
            $model->delayTestShrink = $map['DelayTest'];
        }
        if (isset($map['NetTestType'])) {
            $model->netTestType = $map['NetTestType'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['TrafficTest'])) {
            $model->trafficTestShrink = $map['TrafficTest'];
        }

        return $model;
    }
}
