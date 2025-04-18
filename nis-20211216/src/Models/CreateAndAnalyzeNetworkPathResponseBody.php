<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class CreateAndAnalyzeNetworkPathResponseBody extends Model
{
    /**
     * @var string
     */
    public $networkReachableAnalysisId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @var string
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $targetId;

    /**
     * @var string
     */
    public $targetIpAddress;

    /**
     * @var string
     */
    public $targetPort;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'networkReachableAnalysisId' => 'NetworkReachableAnalysisId',
        'protocol' => 'Protocol',
        'requestId' => 'RequestId',
        'sourceId' => 'SourceId',
        'sourceIpAddress' => 'SourceIpAddress',
        'sourcePort' => 'SourcePort',
        'sourceType' => 'SourceType',
        'targetId' => 'TargetId',
        'targetIpAddress' => 'TargetIpAddress',
        'targetPort' => 'TargetPort',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkReachableAnalysisId) {
            $res['NetworkReachableAnalysisId'] = $this->networkReachableAnalysisId;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceIpAddress) {
            $res['SourceIpAddress'] = $this->sourceIpAddress;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetIpAddress) {
            $res['TargetIpAddress'] = $this->targetIpAddress;
        }

        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['NetworkReachableAnalysisId'])) {
            $model->networkReachableAnalysisId = $map['NetworkReachableAnalysisId'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceIpAddress'])) {
            $model->sourceIpAddress = $map['SourceIpAddress'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetIpAddress'])) {
            $model->targetIpAddress = $map['TargetIpAddress'];
        }

        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
