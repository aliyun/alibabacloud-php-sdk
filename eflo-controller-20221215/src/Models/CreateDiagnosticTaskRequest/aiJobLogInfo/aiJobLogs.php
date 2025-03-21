<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo\aiJobLogs\logs;
use AlibabaCloud\Tea\Model;

class aiJobLogs extends Model
{
    /**
     * @description Instance ID
     *
     * @example null
     *
     * @var string
     */
    public $aiInstance;

    /**
     * @description Log object
     *
     * @var logs[]
     */
    public $logs;

    /**
     * @description Node ID
     *
     * @example e01-tw-p2p2al5u1hn
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'aiInstance' => 'AiInstance',
        'logs' => 'Logs',
        'nodeId' => 'NodeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiInstance) {
            $res['AiInstance'] = $this->aiInstance;
        }
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aiJobLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiInstance'])) {
            $model->aiInstance = $map['AiInstance'];
        }
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
