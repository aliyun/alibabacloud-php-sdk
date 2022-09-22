<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsPathsResponseBody\networkInsightsPathSets;

use AlibabaCloud\Tea\Model;

class networkInsightsPathSet extends Model
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
    public $destinationPort;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $networkInsightsPathId;

    /**
     * @var string
     */
    public $networkInsightsPathName;

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
    public $source;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'            => 'CreationTime',
        'destination'             => 'Destination',
        'destinationPort'         => 'DestinationPort',
        'destinationType'         => 'DestinationType',
        'networkInsightsPathId'   => 'NetworkInsightsPathId',
        'networkInsightsPathName' => 'NetworkInsightsPathName',
        'networkPathFound'        => 'NetworkPathFound',
        'protocol'                => 'Protocol',
        'source'                  => 'Source',
        'sourceType'              => 'SourceType',
        'status'                  => 'Status',
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
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->networkInsightsPathId) {
            $res['NetworkInsightsPathId'] = $this->networkInsightsPathId;
        }
        if (null !== $this->networkInsightsPathName) {
            $res['NetworkInsightsPathName'] = $this->networkInsightsPathName;
        }
        if (null !== $this->networkPathFound) {
            $res['NetworkPathFound'] = $this->networkPathFound;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return networkInsightsPathSet
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
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['NetworkInsightsPathId'])) {
            $model->networkInsightsPathId = $map['NetworkInsightsPathId'];
        }
        if (isset($map['NetworkInsightsPathName'])) {
            $model->networkInsightsPathName = $map['NetworkInsightsPathName'];
        }
        if (isset($map['NetworkPathFound'])) {
            $model->networkPathFound = $map['NetworkPathFound'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
