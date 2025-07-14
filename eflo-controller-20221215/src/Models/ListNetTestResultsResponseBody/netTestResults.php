<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\commTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\delayTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListNetTestResultsResponseBody\netTestResults\trafficTest;
use AlibabaCloud\Tea\Model;

class netTestResults extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i110667211718265012218
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster name.
     *
     * @example test
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Returned when NetTestType is CommTest.
     *
     * @var commTest
     */
    public $commTest;

    /**
     * @description The creation time.
     *
     * @example 2024-01-19T02:18:12Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Returned when NetTestType is DelayTest.
     *
     * @var delayTest
     */
    public $delayTest;

    /**
     * @description The finish time.
     *
     * @example 2024-10-30T02:07Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The type of the network test.
     *
     * @example NetDiag
     *
     * @var string
     */
    public $netTestType;

    /**
     * @description The network mode.
     *
     * @example 01
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description The port number.
     *
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The status of the network test task. Valid values:\\
     * ● InProgress\\
     * ● Finished\\
     * ● Failed
     *
     * @example InProgress
     *
     * @var string
     */
    public $status;

    /**
     * @description The test ID. The unique identifier of the resource test task.
     *
     * @example String	i-uf6i0tv2refv8wz*****
     *
     * @var string
     */
    public $testId;

    /**
     * @description Returned when NetTestType is TrafficTest.
     *
     * @var trafficTest
     */
    public $trafficTest;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'commTest' => 'CommTest',
        'creationTime' => 'CreationTime',
        'delayTest' => 'DelayTest',
        'finishedTime' => 'FinishedTime',
        'netTestType' => 'NetTestType',
        'networkMode' => 'NetworkMode',
        'port' => 'Port',
        'status' => 'Status',
        'testId' => 'TestId',
        'trafficTest' => 'TrafficTest',
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
        if (null !== $this->commTest) {
            $res['CommTest'] = null !== $this->commTest ? $this->commTest->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->delayTest) {
            $res['DelayTest'] = null !== $this->delayTest ? $this->delayTest->toMap() : null;
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }
        if (null !== $this->trafficTest) {
            $res['TrafficTest'] = null !== $this->trafficTest ? $this->trafficTest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netTestResults
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
            $model->commTest = commTest::fromMap($map['CommTest']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DelayTest'])) {
            $model->delayTest = delayTest::fromMap($map['DelayTest']);
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }
        if (isset($map['TrafficTest'])) {
            $model->trafficTest = trafficTest::fromMap($map['TrafficTest']);
        }

        return $model;
    }
}
