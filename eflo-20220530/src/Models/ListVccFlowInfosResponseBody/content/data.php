<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccFlowInfosResponseBody\content;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $vccId;
    protected $_name = [
        'direction' => 'Direction',
        'metricName' => 'MetricName',
        'regionId' => 'RegionId',
        'timestamp' => 'Timestamp',
        'value' => 'Value',
        'vccId' => 'VccId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
