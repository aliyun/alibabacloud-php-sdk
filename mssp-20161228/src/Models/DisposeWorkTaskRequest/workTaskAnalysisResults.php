<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\DisposeWorkTaskRequest;

use AlibabaCloud\Dara\Model;

class workTaskAnalysisResults extends Model
{
    /**
     * @var string
     */
    public $analysisResult;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'analysisResult' => 'AnalysisResult',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisResult) {
            $res['AnalysisResult'] = $this->analysisResult;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AnalysisResult'])) {
            $model->analysisResult = $map['AnalysisResult'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
