<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest\commTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest\delayTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest\trafficTest;

class CreateNetTestTaskRequest extends Model
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
     * @var commTest
     */
    public $commTest;
    /**
     * @var delayTest
     */
    public $delayTest;
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
     * @var trafficTest
     */
    public $trafficTest;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'commTest'    => 'CommTest',
        'delayTest'   => 'DelayTest',
        'netTestType' => 'NetTestType',
        'networkMode' => 'NetworkMode',
        'port'        => 'Port',
        'trafficTest' => 'TrafficTest',
    ];

    public function validate()
    {
        if (null !== $this->commTest) {
            $this->commTest->validate();
        }
        if (null !== $this->delayTest) {
            $this->delayTest->validate();
        }
        if (null !== $this->trafficTest) {
            $this->trafficTest->validate();
        }
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

        if (null !== $this->commTest) {
            $res['CommTest'] = null !== $this->commTest ? $this->commTest->toArray($noStream) : $this->commTest;
        }

        if (null !== $this->delayTest) {
            $res['DelayTest'] = null !== $this->delayTest ? $this->delayTest->toArray($noStream) : $this->delayTest;
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

        if (null !== $this->trafficTest) {
            $res['TrafficTest'] = null !== $this->trafficTest ? $this->trafficTest->toArray($noStream) : $this->trafficTest;
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
            $model->commTest = commTest::fromMap($map['CommTest']);
        }

        if (isset($map['DelayTest'])) {
            $model->delayTest = delayTest::fromMap($map['DelayTest']);
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
            $model->trafficTest = trafficTest::fromMap($map['TrafficTest']);
        }

        return $model;
    }
}
