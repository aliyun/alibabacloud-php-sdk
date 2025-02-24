<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;

class ListVccFlowInfosRequest extends Model
{
    /**
     * @var string
     */
    public $direction;
    /**
     * @var int
     */
    public $from;
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
    public $to;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
