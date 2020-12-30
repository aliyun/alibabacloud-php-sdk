<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDoSTrafficRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $eip;
    protected $_name = [
        'sourceIp'        => 'SourceIp',
        'resourceGroupId' => 'ResourceGroupId',
        'startTime'       => 'StartTime',
        'interval'        => 'Interval',
        'endTime'         => 'EndTime',
        'eip'             => 'Eip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDoSTrafficRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }

        return $model;
    }
}
