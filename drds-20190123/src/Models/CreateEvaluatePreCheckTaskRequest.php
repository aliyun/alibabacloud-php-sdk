<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\CreateEvaluatePreCheckTaskRequest\dbInfo;
use AlibabaCloud\Tea\Model;

class CreateEvaluatePreCheckTaskRequest extends Model
{
    /**
     * @var int
     */
    public $avgQpsGrowthScale;

    /**
     * @var int
     */
    public $dataGrowthScale;

    /**
     * @var dbInfo[]
     */
    public $dbInfo;

    /**
     * @var int
     */
    public $evaluateHours;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'avgQpsGrowthScale' => 'AvgQpsGrowthScale',
        'dataGrowthScale'   => 'DataGrowthScale',
        'dbInfo'            => 'DbInfo',
        'evaluateHours'     => 'EvaluateHours',
        'taskName'          => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgQpsGrowthScale) {
            $res['AvgQpsGrowthScale'] = $this->avgQpsGrowthScale;
        }
        if (null !== $this->dataGrowthScale) {
            $res['DataGrowthScale'] = $this->dataGrowthScale;
        }
        if (null !== $this->dbInfo) {
            $res['DbInfo'] = [];
            if (null !== $this->dbInfo && \is_array($this->dbInfo)) {
                $n = 0;
                foreach ($this->dbInfo as $item) {
                    $res['DbInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->evaluateHours) {
            $res['EvaluateHours'] = $this->evaluateHours;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEvaluatePreCheckTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgQpsGrowthScale'])) {
            $model->avgQpsGrowthScale = $map['AvgQpsGrowthScale'];
        }
        if (isset($map['DataGrowthScale'])) {
            $model->dataGrowthScale = $map['DataGrowthScale'];
        }
        if (isset($map['DbInfo'])) {
            if (!empty($map['DbInfo'])) {
                $model->dbInfo = [];
                $n             = 0;
                foreach ($map['DbInfo'] as $item) {
                    $model->dbInfo[$n++] = null !== $item ? dbInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EvaluateHours'])) {
            $model->evaluateHours = $map['EvaluateHours'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
