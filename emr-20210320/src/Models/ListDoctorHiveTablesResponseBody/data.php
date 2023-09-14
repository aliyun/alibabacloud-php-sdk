<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody\data\formats;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var analysis
     */
    public $analysis;

    /**
     * @var formats[]
     */
    public $formats;

    /**
     * @var metrics
     */
    public $metrics;

    /**
     * @example DW
     *
     * @var string
     */
    public $owner;

    /**
     * @example dw.dwd_creta_service_order_long_renew_long_da
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'analysis'  => 'Analysis',
        'formats'   => 'Formats',
        'metrics'   => 'Metrics',
        'owner'     => 'Owner',
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
        if (null !== $this->formats) {
            $res['Formats'] = [];
            if (null !== $this->formats && \is_array($this->formats)) {
                $n = 0;
                foreach ($this->formats as $item) {
                    $res['Formats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (isset($map['Formats'])) {
            if (!empty($map['Formats'])) {
                $model->formats = [];
                $n              = 0;
                foreach ($map['Formats'] as $item) {
                    $model->formats[$n++] = null !== $item ? formats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
