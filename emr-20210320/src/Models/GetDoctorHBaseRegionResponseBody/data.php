<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data\metrics;

class data extends Model
{
    /**
     * @var metrics
     */
    public $metrics;

    /**
     * @var string
     */
    public $regionServerHost;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'metrics' => 'Metrics',
        'regionServerHost' => 'RegionServerHost',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (null !== $this->metrics) {
            $this->metrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toArray($noStream) : $this->metrics;
        }

        if (null !== $this->regionServerHost) {
            $res['RegionServerHost'] = $this->regionServerHost;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }

        if (isset($map['RegionServerHost'])) {
            $model->regionServerHost = $map['RegionServerHost'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
