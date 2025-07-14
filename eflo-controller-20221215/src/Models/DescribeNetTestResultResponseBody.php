<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\commTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\delayTest;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\trafficTest;
use AlibabaCloud\Tea\Model;

class DescribeNetTestResultResponseBody extends Model
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
     * @example Standard_Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Specify when NetTestType is CommTest.
     *
     * @var commTest
     */
    public $commTest;

    /**
     * @description create time
     *
     * @example 2024-10-15T10:25:42+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description Fill in when the network test type is a delay test.
     *
     * @var delayTest
     */
    public $delayTest;

    /**
     * @description finish time
     *
     * @example 2024-10-16T02:04Z
     *
     * @var string
     */
    public $finishedTime;

    /**
     * @description The type of the network test.
     *
     * @example DelayTest
     *
     * @var string
     */
    public $netTestType;

    /**
     * @description Test port number.
     *
     * @example 23604
     *
     * @var string
     */
    public $port;

    /**
     * @description The request ID.
     *
     * @example 8F065DDD-6996-5973-9691-9EC57BD0072E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description result detail
     *
     * @example {}
     *
     * @var string
     */
    public $resultDetial;

    /**
     * @description status of session
     *
     * @example Failed
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the test task. The unique identifier of a network test task.
     *
     * @example af35ce53-7c35-4277-834a-fbf49c316a96
     *
     * @var string
     */
    public $testId;

    /**
     * @description Fill in when the network test type is a traffic test.
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
        'port' => 'Port',
        'requestId' => 'RequestId',
        'resultDetial' => 'ResultDetial',
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
            $res['TrafficTest'] = null !== $this->trafficTest ? $this->trafficTest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetTestResultResponseBody
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
