<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class CreateAndAnalyzeNetworkPathResponseBody extends Model
{
    /**
     * @description The ID of the task for analyzing network reachability that you initiated.
     *
     * @example nra-dfe9e53d2b524568****
     *
     * @var string
     */
    public $networkReachableAnalysisId;

    /**
     * @description The protocol type.
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The request ID.
     *
     * @example D5E98683-355B-5867-8D3D-A24755F6895B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the source resource.
     *
     * @example i-uf62y8khhbkbdrp6****
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description The source IP address.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @description The source port.
     *
     * @example 0
     *
     * @var string
     */
    public $sourcePort;

    /**
     * @description The type of the source resource.
     *
     * @example ecs
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The ID of the destination resource.
     *
     * @example i-m5eactvw7wtpktv5****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The destination IP address.
     *
     * @example 172.50.XX.XX
     *
     * @var string
     */
    public $targetIpAddress;

    /**
     * @description The destination port.
     *
     * @example 80
     *
     * @var string
     */
    public $targetPort;

    /**
     * @description The type of the destination resource.
     *
     * @example ecs
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'networkReachableAnalysisId' => 'NetworkReachableAnalysisId',
        'protocol'                   => 'Protocol',
        'requestId'                  => 'RequestId',
        'sourceId'                   => 'SourceId',
        'sourceIpAddress'            => 'SourceIpAddress',
        'sourcePort'                 => 'SourcePort',
        'sourceType'                 => 'SourceType',
        'targetId'                   => 'TargetId',
        'targetIpAddress'            => 'TargetIpAddress',
        'targetPort'                 => 'TargetPort',
        'targetType'                 => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateAndAnalyzeNetworkPathResponseBody
     */
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
