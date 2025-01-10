<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListVccFlowInfosRequest extends Model
{
    /**
     * @description Direction
     *
     * Valid value:
     *
     *   IN: inbound.
     *   OUT: the outbound.
     *
     * @example OUT
     *
     * @var string
     */
    public $direction;

    /**
     * @description The start time. The default value is 5 minutes ago.
     *
     * @example 1667727514000
     *
     * @var int
     */
    public $from;

    /**
     * @description Metric
     *
     * Valid value:
     *
     *   totalPacketsRate: Total Packet Rate.
     *   dropBytesRate: the of the stream drop rate.
     *   dropPacketsRate: Dropped Packet Rate.
     *   totalBytesRate: the total streaming rate.
     *   passBytesRate: by stream rate.
     *   passPacketsRate: by packet rate.
     *
     * @example passBytesRate
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The end time. The default time is the current time.
     *
     * @example 1689749749000
     *
     * @var int
     */
    public $to;

    /**
     * @description Lingjun Connection ID
     *
     * @example vcc-cn-zvp2******
     *
     * @var string
     */
    public $vccId;
    protected $_name = [
        'direction'  => 'Direction',
        'from'       => 'From',
        'metricName' => 'MetricName',
        'regionId'   => 'RegionId',
        'to'         => 'To',
        'vccId'      => 'VccId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVccFlowInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }

        return $model;
    }
}
