<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBProxyPerformanceRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $DBEndpointId;
    /**
     * @var string
     */
    public $DBNodeId;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $interval;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'DBEndpointId' => 'DBEndpointId',
        'DBNodeId'     => 'DBNodeId',
        'endTime'      => 'EndTime',
        'interval'     => 'Interval',
        'key'          => 'Key',
        'startTime'    => 'StartTime',
        'type'         => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }

        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }

        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
