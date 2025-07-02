<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody\data\analysis;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody\data\formats;
use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHiveTablesResponseBody\data\metrics;

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
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'analysis' => 'Analysis',
        'formats' => 'Formats',
        'metrics' => 'Metrics',
        'owner' => 'Owner',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (null !== $this->analysis) {
            $this->analysis->validate();
        }
        if (\is_array($this->formats)) {
            Model::validateArray($this->formats);
        }
        if (null !== $this->metrics) {
            $this->metrics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysis) {
            $res['Analysis'] = null !== $this->analysis ? $this->analysis->toArray($noStream) : $this->analysis;
        }

        if (null !== $this->formats) {
            if (\is_array($this->formats)) {
                $res['Formats'] = [];
                $n1 = 0;
                foreach ($this->formats as $item1) {
                    $res['Formats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toArray($noStream) : $this->metrics;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (isset($map['Analysis'])) {
            $model->analysis = analysis::fromMap($map['Analysis']);
        }

        if (isset($map['Formats'])) {
            if (!empty($map['Formats'])) {
                $model->formats = [];
                $n1 = 0;
                foreach ($map['Formats'] as $item1) {
                    $model->formats[$n1] = formats::fromMap($item1);
                    ++$n1;
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
