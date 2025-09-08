<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest\agentOrchestration\dataAnalystAgent;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest\agentOrchestration\dataCollectorAgent;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitDeepWriteTaskRequest\agentOrchestration\reporterAgent;

class agentOrchestration extends Model
{
    /**
     * @var dataAnalystAgent
     */
    public $dataAnalystAgent;

    /**
     * @var dataCollectorAgent
     */
    public $dataCollectorAgent;

    /**
     * @var reporterAgent
     */
    public $reporterAgent;
    protected $_name = [
        'dataAnalystAgent' => 'DataAnalystAgent',
        'dataCollectorAgent' => 'DataCollectorAgent',
        'reporterAgent' => 'ReporterAgent',
    ];

    public function validate()
    {
        if (null !== $this->dataAnalystAgent) {
            $this->dataAnalystAgent->validate();
        }
        if (null !== $this->dataCollectorAgent) {
            $this->dataCollectorAgent->validate();
        }
        if (null !== $this->reporterAgent) {
            $this->reporterAgent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataAnalystAgent) {
            $res['DataAnalystAgent'] = null !== $this->dataAnalystAgent ? $this->dataAnalystAgent->toArray($noStream) : $this->dataAnalystAgent;
        }

        if (null !== $this->dataCollectorAgent) {
            $res['DataCollectorAgent'] = null !== $this->dataCollectorAgent ? $this->dataCollectorAgent->toArray($noStream) : $this->dataCollectorAgent;
        }

        if (null !== $this->reporterAgent) {
            $res['ReporterAgent'] = null !== $this->reporterAgent ? $this->reporterAgent->toArray($noStream) : $this->reporterAgent;
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
        if (isset($map['DataAnalystAgent'])) {
            $model->dataAnalystAgent = dataAnalystAgent::fromMap($map['DataAnalystAgent']);
        }

        if (isset($map['DataCollectorAgent'])) {
            $model->dataCollectorAgent = dataCollectorAgent::fromMap($map['DataCollectorAgent']);
        }

        if (isset($map['ReporterAgent'])) {
            $model->reporterAgent = reporterAgent::fromMap($map['ReporterAgent']);
        }

        return $model;
    }
}
