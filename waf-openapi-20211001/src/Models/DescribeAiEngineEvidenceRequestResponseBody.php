<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEvidenceRequestResponseBody\attackSources;

class DescribeAiEngineEvidenceRequestResponseBody extends Model
{
    /**
     * @var string
     */
    public $aiInterpretation;

    /**
     * @var attackSources[]
     */
    public $attackSources;

    /**
     * @var string
     */
    public $evidenceId;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $httpStatus;

    /**
     * @var string
     */
    public $impactType;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $request;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestPath;

    /**
     * @var int
     */
    public $requestTime;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $response;

    /**
     * @var int
     */
    public $suspectedBypass;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'aiInterpretation' => 'AiInterpretation',
        'attackSources' => 'AttackSources',
        'evidenceId' => 'EvidenceId',
        'host' => 'Host',
        'httpStatus' => 'HttpStatus',
        'impactType' => 'ImpactType',
        'method' => 'Method',
        'nodeId' => 'NodeId',
        'request' => 'Request',
        'requestId' => 'RequestId',
        'requestPath' => 'RequestPath',
        'requestTime' => 'RequestTime',
        'resource' => 'Resource',
        'response' => 'Response',
        'suspectedBypass' => 'SuspectedBypass',
        'traceId' => 'TraceId',
    ];

    public function validate()
    {
        if (\is_array($this->attackSources)) {
            Model::validateArray($this->attackSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiInterpretation) {
            $res['AiInterpretation'] = $this->aiInterpretation;
        }

        if (null !== $this->attackSources) {
            if (\is_array($this->attackSources)) {
                $res['AttackSources'] = [];
                $n1 = 0;
                foreach ($this->attackSources as $item1) {
                    $res['AttackSources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->evidenceId) {
            $res['EvidenceId'] = $this->evidenceId;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->httpStatus) {
            $res['HttpStatus'] = $this->httpStatus;
        }

        if (null !== $this->impactType) {
            $res['ImpactType'] = $this->impactType;
        }

        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->request) {
            $res['Request'] = $this->request;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->requestPath) {
            $res['RequestPath'] = $this->requestPath;
        }

        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->response) {
            $res['Response'] = $this->response;
        }

        if (null !== $this->suspectedBypass) {
            $res['SuspectedBypass'] = $this->suspectedBypass;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
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
        if (isset($map['AiInterpretation'])) {
            $model->aiInterpretation = $map['AiInterpretation'];
        }

        if (isset($map['AttackSources'])) {
            if (!empty($map['AttackSources'])) {
                $model->attackSources = [];
                $n1 = 0;
                foreach ($map['AttackSources'] as $item1) {
                    $model->attackSources[$n1] = attackSources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EvidenceId'])) {
            $model->evidenceId = $map['EvidenceId'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['HttpStatus'])) {
            $model->httpStatus = $map['HttpStatus'];
        }

        if (isset($map['ImpactType'])) {
            $model->impactType = $map['ImpactType'];
        }

        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Request'])) {
            $model->request = $map['Request'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RequestPath'])) {
            $model->requestPath = $map['RequestPath'];
        }

        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['Response'])) {
            $model->response = $map['Response'];
        }

        if (isset($map['SuspectedBypass'])) {
            $model->suspectedBypass = $map['SuspectedBypass'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
