<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkInsightsPathRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $needDiagnoseGuest;

    /**
     * @var string
     */
    public $networkInsightsPathName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'destination'             => 'Destination',
        'destinationPort'         => 'DestinationPort',
        'destinationType'         => 'DestinationType',
        'dryRun'                  => 'DryRun',
        'needDiagnoseGuest'       => 'NeedDiagnoseGuest',
        'networkInsightsPathName' => 'NetworkInsightsPathName',
        'protocol'                => 'Protocol',
        'regionId'                => 'RegionId',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'source'                  => 'Source',
        'sourceType'              => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->needDiagnoseGuest) {
            $res['NeedDiagnoseGuest'] = $this->needDiagnoseGuest;
        }
        if (null !== $this->networkInsightsPathName) {
            $res['NetworkInsightsPathName'] = $this->networkInsightsPathName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkInsightsPathRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['NeedDiagnoseGuest'])) {
            $model->needDiagnoseGuest = $map['NeedDiagnoseGuest'];
        }
        if (isset($map['NetworkInsightsPathName'])) {
            $model->networkInsightsPathName = $map['NetworkInsightsPathName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
