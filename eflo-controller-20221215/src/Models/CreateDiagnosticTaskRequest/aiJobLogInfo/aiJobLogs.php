<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo\aiJobLogs\logs;

class aiJobLogs extends Model
{
    /**
     * @var string
     */
    public $aiInstance;
    /**
     * @var logs[]
     */
    public $logs;
    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'aiInstance' => 'AiInstance',
        'logs'       => 'Logs',
        'nodeId'     => 'NodeId',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiInstance) {
            $res['AiInstance'] = $this->aiInstance;
        }

        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1          = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['AiInstance'])) {
            $model->aiInstance = $map['AiInstance'];
        }

        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n1          = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1++] = logs::fromMap($item1);
                }
            }
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
