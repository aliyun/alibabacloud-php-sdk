<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListNatGatewayEcsMetricRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $orderKey;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $timePoint;
    protected $_name = [
        'dryRun'           => 'DryRun',
        'maxResults'       => 'MaxResults',
        'natGatewayId'     => 'NatGatewayId',
        'nextToken'        => 'NextToken',
        'orderKey'         => 'OrderKey',
        'orderType'        => 'OrderType',
        'privateIpAddress' => 'PrivateIpAddress',
        'regionId'         => 'RegionId',
        'timePoint'        => 'TimePoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNatGatewayEcsMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
