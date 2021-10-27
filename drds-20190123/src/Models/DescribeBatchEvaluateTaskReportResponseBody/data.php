<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBatchEvaluateTaskReportResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBatchEvaluateTaskReportResponseBody\data\evaluateResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var evaluateResults[]
     */
    public $evaluateResults;
    protected $_name = [
        'evaluateResults' => 'EvaluateResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluateResults) {
            $res['EvaluateResults'] = [];
            if (null !== $this->evaluateResults && \is_array($this->evaluateResults)) {
                $n = 0;
                foreach ($this->evaluateResults as $item) {
                    $res['EvaluateResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['EvaluateResults'])) {
            if (!empty($map['EvaluateResults'])) {
                $model->evaluateResults = [];
                $n                      = 0;
                foreach ($map['EvaluateResults'] as $item) {
                    $model->evaluateResults[$n++] = null !== $item ? evaluateResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
