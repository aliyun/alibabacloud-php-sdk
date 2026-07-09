<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetEvaluationRunResponseBody;

use AlibabaCloud\Dara\Model;

class evaluatorProgress extends Model
{
    /**
     * @var string
     */
    public $evaluatorName;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'evaluatorName' => 'evaluatorName',
        'failedCount' => 'failedCount',
        'successCount' => 'successCount',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evaluatorName) {
            $res['evaluatorName'] = $this->evaluatorName;
        }

        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->successCount) {
            $res['successCount'] = $this->successCount;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['evaluatorName'])) {
            $model->evaluatorName = $map['evaluatorName'];
        }

        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['successCount'])) {
            $model->successCount = $map['successCount'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
