<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DebugPlaybookRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The playbook UUID.
     *
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~)operation to query the playbook UUID.
     *
     * This parameter is required.
     *
     * @example f916b93e-e814-459f-9662-xxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The input parameters that you use to debug the playbook. You can define the parameters based on your business requirements.
     *
     * @example {
     * "param1":"a",
     * "param2":"b"
     * }
     *
     * @var string
     */
    public $record;

    /**
     * @description The XML configuration of the playbook.
     *
     * >  You can call the [DescribePlaybook](~~DescribePlaybook~~) operation to query the XML configuration of the playbook.
     *
     * This parameter is required.
     *
     * @example <?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>
     *
     * @var string
     */
    public $taskflow;
    protected $_name = [
        'lang' => 'Lang',
        'playbookUuid' => 'PlaybookUuid',
        'record' => 'Record',
        'taskflow' => 'Taskflow',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->record) {
            $res['Record'] = $this->record;
        }
        if (null !== $this->taskflow) {
            $res['Taskflow'] = $this->taskflow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebugPlaybookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['Record'])) {
            $model->record = $map['Record'];
        }
        if (isset($map['Taskflow'])) {
            $model->taskflow = $map['Taskflow'];
        }

        return $model;
    }
}
