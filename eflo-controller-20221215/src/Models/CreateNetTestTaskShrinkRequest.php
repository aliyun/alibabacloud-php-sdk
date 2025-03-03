<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class CreateNetTestTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string
     */
    public $commTestShrink;
    /**
     * @var string
     */
    public $delayTestShrink;
    /**
     * @var string
     */
    public $netTestType;
    /**
     * @var string
     */
    public $networkMode;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $trafficTestShrink;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'commTestShrink'    => 'CommTest',
        'delayTestShrink'   => 'DelayTest',
        'netTestType'       => 'NetTestType',
        'networkMode'       => 'NetworkMode',
        'port'              => 'Port',
        'trafficTestShrink' => 'TrafficTest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
