<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTaskReportResponseBody\evaluateResult;

use AlibabaCloud\Tea\Model;

class tableShardResults extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTaskReportResponseBody\evaluateResult\tableShardResults\tableShardResults[]
     */
    public $tableShardResults;
    protected $_name = [
        'tableShardResults' => 'TableShardResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableShardResults) {
            $res['TableShardResults'] = [];
            if (null !== $this->tableShardResults && \is_array($this->tableShardResults)) {
                $n = 0;
                foreach ($this->tableShardResults as $item) {
                    $res['TableShardResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableShardResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableShardResults'])) {
            if (!empty($map['TableShardResults'])) {
                $model->tableShardResults = [];
                $n                        = 0;
                foreach ($map['TableShardResults'] as $item) {
                    $model->tableShardResults[$n++] = null !== $item ? \AlibabaCloud\SDK\Drds\V20190123\Models\DescribeEvaluateTaskReportResponseBody\evaluateResult\tableShardResults\tableShardResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
