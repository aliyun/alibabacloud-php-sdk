<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccFlowInfosResponseBody\content;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The direction.
     *
     * @example OUT
     *
     * @var string
     */
    public $direction;

    /**
     * @description The metric. Valid values:
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
     * @description Time
     *
     * @example 1689749749000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description Value
     *
     * @example 123
     *
     * @var float
     */
    public $value;

    /**
     * @description Lingjun Connection ID
     *
     * @example vcc-cn-zvp2w******
     *
     * @var string
     */
    public $vccId;
    protected $_name = [
        'direction'  => 'Direction',
        'metricName' => 'MetricName',
        'regionId'   => 'RegionId',
        'timestamp'  => 'Timestamp',
        'value'      => 'Value',
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
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }

        return $model;
    }
}
