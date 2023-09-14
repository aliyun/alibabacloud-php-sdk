<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveDatabasesResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveDatabasesResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveDatabasesResponseBody\data\formats;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveDatabasesResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var analysis
     */
    public $analysis;

    /**
     * @example db1
     *
     * @var string
     */
    public $databaseName;

    /**
     * @var formats[]
     */
    public $formats;

    /**
     * @var metrics
     */
    public $metrics;
    protected $_name = [
        'analysis'     => 'Analysis',
        'databaseName' => 'DatabaseName',
        'formats'      => 'Formats',
        'metrics'      => 'Metrics',
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
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
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
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
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

        return $model;
    }
}
