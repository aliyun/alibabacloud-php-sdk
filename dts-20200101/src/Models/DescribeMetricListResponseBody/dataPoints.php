<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMetricListResponseBody;

use AlibabaCloud\Dara\Model;

class dataPoints extends Model
{
    /**
     * @var float
     */
    public $statistics;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'statistics' => 'Statistics',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
