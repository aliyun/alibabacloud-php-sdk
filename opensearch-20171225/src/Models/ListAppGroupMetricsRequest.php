<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListAppGroupMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $metricType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $indexes;
    protected $_name = [
        'metricType' => 'metricType',
        'startTime'  => 'startTime',
        'endTime'    => 'endTime',
        'indexes'    => 'indexes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->indexes) {
            $res['indexes'] = $this->indexes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppGroupMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['indexes'])) {
            $model->indexes = $map['indexes'];
        }

        return $model;
    }
}
