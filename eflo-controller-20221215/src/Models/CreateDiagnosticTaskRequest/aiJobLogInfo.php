<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo\aiJobLogs;

class aiJobLogInfo extends Model
{
    /**
     * @var aiJobLogs[]
     */
    public $aiJobLogs;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'aiJobLogs' => 'AiJobLogs',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->aiJobLogs)) {
            Model::validateArray($this->aiJobLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiJobLogs) {
            if (\is_array($this->aiJobLogs)) {
                $res['AiJobLogs'] = [];
                $n1               = 0;
                foreach ($this->aiJobLogs as $item1) {
                    $res['AiJobLogs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AiJobLogs'])) {
            if (!empty($map['AiJobLogs'])) {
                $model->aiJobLogs = [];
                $n1               = 0;
                foreach ($map['AiJobLogs'] as $item1) {
                    $model->aiJobLogs[$n1++] = aiJobLogs::fromMap($item1);
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
