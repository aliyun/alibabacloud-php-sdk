<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeBatchEvaluateTaskReportRequest extends Model
{
    /**
     * @var int
     */
    public $batchEvaluateTaskId;
    protected $_name = [
        'batchEvaluateTaskId' => 'BatchEvaluateTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchEvaluateTaskId) {
            $res['BatchEvaluateTaskId'] = $this->batchEvaluateTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchEvaluateTaskReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchEvaluateTaskId'])) {
            $model->batchEvaluateTaskId = $map['BatchEvaluateTaskId'];
        }

        return $model;
    }
}
