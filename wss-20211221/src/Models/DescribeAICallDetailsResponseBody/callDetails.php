<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeAICallDetailsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeAICallDetailsResponseBody\callDetails\pointsBreakdown;

class callDetails extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $callStatus;

    /**
     * @var string
     */
    public $callTime;

    /**
     * @var int
     */
    public $firstTokenLatencyMs;

    /**
     * @var string
     */
    public $gatewayRegion;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var int
     */
    public $inputToken;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $points;

    /**
     * @var pointsBreakdown
     */
    public $pointsBreakdown;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'agentType' => 'AgentType',
        'callStatus' => 'CallStatus',
        'callTime' => 'CallTime',
        'firstTokenLatencyMs' => 'FirstTokenLatencyMs',
        'gatewayRegion' => 'GatewayRegion',
        'httpStatusCode' => 'HttpStatusCode',
        'inputToken' => 'InputToken',
        'instanceId' => 'InstanceId',
        'model' => 'Model',
        'points' => 'Points',
        'pointsBreakdown' => 'PointsBreakdown',
        'requestId' => 'RequestId',
        'wyId' => 'WyId',
    ];

    public function validate()
    {
        if (null !== $this->pointsBreakdown) {
            $this->pointsBreakdown->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }

        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }

        if (null !== $this->firstTokenLatencyMs) {
            $res['FirstTokenLatencyMs'] = $this->firstTokenLatencyMs;
        }

        if (null !== $this->gatewayRegion) {
            $res['GatewayRegion'] = $this->gatewayRegion;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->inputToken) {
            $res['InputToken'] = $this->inputToken;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }

        if (null !== $this->pointsBreakdown) {
            $res['PointsBreakdown'] = null !== $this->pointsBreakdown ? $this->pointsBreakdown->toArray($noStream) : $this->pointsBreakdown;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
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
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }

        if (isset($map['CallTime'])) {
            $model->callTime = $map['CallTime'];
        }

        if (isset($map['FirstTokenLatencyMs'])) {
            $model->firstTokenLatencyMs = $map['FirstTokenLatencyMs'];
        }

        if (isset($map['GatewayRegion'])) {
            $model->gatewayRegion = $map['GatewayRegion'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['InputToken'])) {
            $model->inputToken = $map['InputToken'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }

        if (isset($map['PointsBreakdown'])) {
            $model->pointsBreakdown = pointsBreakdown::fromMap($map['PointsBreakdown']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
