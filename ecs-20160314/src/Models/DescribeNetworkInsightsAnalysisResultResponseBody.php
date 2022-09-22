<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents;
use AlibabaCloud\Tea\Model;

class DescribeNetworkInsightsAnalysisResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var string
     */
    public $destinationPort;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var networkInsightsAnalysisComponents
     */
    public $networkInsightsAnalysisComponents;

    /**
     * @var string
     */
    public $networkInsightsAnalysisId;

    /**
     * @var string
     */
    public $networkInsightsPathId;

    /**
     * @var string
     */
    public $networkPathFound;

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
    public $source;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'                      => 'CreationTime',
        'destination'                       => 'Destination',
        'destinationIp'                     => 'DestinationIp',
        'destinationPort'                   => 'DestinationPort',
        'destinationType'                   => 'DestinationType',
        'networkInsightsAnalysisComponents' => 'NetworkInsightsAnalysisComponents',
        'networkInsightsAnalysisId'         => 'NetworkInsightsAnalysisId',
        'networkInsightsPathId'             => 'NetworkInsightsPathId',
        'networkPathFound'                  => 'NetworkPathFound',
        'protocol'                          => 'Protocol',
        'requestId'                         => 'RequestId',
        'source'                            => 'Source',
        'sourceIp'                          => 'SourceIp',
        'sourceType'                        => 'SourceType',
        'status'                            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->networkInsightsAnalysisComponents) {
            $res['NetworkInsightsAnalysisComponents'] = null !== $this->networkInsightsAnalysisComponents ? $this->networkInsightsAnalysisComponents->toMap() : null;
        }
        if (null !== $this->networkInsightsAnalysisId) {
            $res['NetworkInsightsAnalysisId'] = $this->networkInsightsAnalysisId;
        }
        if (null !== $this->networkInsightsPathId) {
            $res['NetworkInsightsPathId'] = $this->networkInsightsPathId;
        }
        if (null !== $this->networkPathFound) {
            $res['NetworkPathFound'] = $this->networkPathFound;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkInsightsAnalysisResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['NetworkInsightsAnalysisComponents'])) {
            $model->networkInsightsAnalysisComponents = networkInsightsAnalysisComponents::fromMap($map['NetworkInsightsAnalysisComponents']);
        }
        if (isset($map['NetworkInsightsAnalysisId'])) {
            $model->networkInsightsAnalysisId = $map['NetworkInsightsAnalysisId'];
        }
        if (isset($map['NetworkInsightsPathId'])) {
            $model->networkInsightsPathId = $map['NetworkInsightsPathId'];
        }
        if (isset($map['NetworkPathFound'])) {
            $model->networkPathFound = $map['NetworkPathFound'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
