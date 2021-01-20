<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutCustomMetricRequest;

use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $values;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $period;
    protected $_name = [
        'type'       => 'Type',
        'metricName' => 'MetricName',
        'time'       => 'Time',
        'groupId'    => 'GroupId',
        'values'     => 'Values',
        'dimensions' => 'Dimensions',
        'period'     => 'Period',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        return $model;
    }
}
