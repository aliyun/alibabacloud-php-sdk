<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class VerifyPlaybookRequest extends Model
{
    /**
     * @example 9fcd3829-80ff-4681-be1e-4d2662c35fed
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example <?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>
     *
     * @var string
     */
    public $taskFlow;
    protected $_name = [
        'playbookUuid' => 'PlaybookUuid',
        'taskFlow'     => 'TaskFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->taskFlow) {
            $res['TaskFlow'] = $this->taskFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyPlaybookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['TaskFlow'])) {
            $model->taskFlow = $map['TaskFlow'];
        }

        return $model;
    }
}
