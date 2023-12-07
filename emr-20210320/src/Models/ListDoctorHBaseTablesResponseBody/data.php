<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseTablesResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The diagnosis result.
     *
     * @var analysis
     */
    public $analysis;

    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;

    /**
     * @description The name of the table.
     *
     * @example tb_item
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'analysis'  => 'Analysis',
        'metrics'   => 'Metrics',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toMap() : null;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
