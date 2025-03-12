<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpTrafficRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $eip;

    /**
     * @description This parameter is required.
     *
     * @example 1536734120
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @example 233
     *
     * @var int
     */
    public $port;

    /**
     * @example http
     *
     * @var string
     */
    public $queryProtocol;

    /**
     * @example xxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description This parameter is required.
     *
     * @example 1536734112
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'eip'             => 'Eip',
        'endTime'         => 'EndTime',
        'interval'        => 'Interval',
        'port'            => 'Port',
        'queryProtocol'   => 'QueryProtocol',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceIp'        => 'SourceIp',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->queryProtocol) {
            $res['QueryProtocol'] = $this->queryProtocol;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpTrafficRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['QueryProtocol'])) {
            $model->queryProtocol = $map['QueryProtocol'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
