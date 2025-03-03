<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\commTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\delayTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\trafficTest;

class DescribeNetTestResultResponseBody extends Model
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
     * @var string
     */
    public $creationTime;
    /**
     * @var delayTest
     */
    public $delayTest;
    /**
     * @var string
     */
    public $finishedTime;
    /**
     * @var string
     */
    public $netTestType;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $resultDetial;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $testId;
    /**
     * @var trafficTest
     */
    public $trafficTest;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'clusterName'  => 'ClusterName',
        'commTest'     => 'CommTest',
        'creationTime' => 'CreationTime',
        'delayTest'    => 'DelayTest',
        'finishedTime' => 'FinishedTime',
        'netTestType'  => 'NetTestType',
        'port'         => 'Port',
        'requestId'    => 'RequestId',
        'resultDetial' => 'ResultDetial',
        'status'       => 'Status',
        'testId'       => 'TestId',
        'trafficTest'  => 'TrafficTest',
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

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->delayTest) {
            $res['DelayTest'] = null !== $this->delayTest ? $this->delayTest->toArray($noStream) : $this->delayTest;
        }

        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }

        if (null !== $this->netTestType) {
            $res['NetTestType'] = $this->netTestType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultDetial) {
            $res['ResultDetial'] = $this->resultDetial;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
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

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResultDetial'])) {
            $model->resultDetial = $map['ResultDetial'];
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
