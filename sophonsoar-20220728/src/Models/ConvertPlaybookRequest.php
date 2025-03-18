<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class ConvertPlaybookRequest extends Model
{
    /**
     * @description Language type for request and response messages. Values:
     *
     * - **zh** (default): Chinese.
     * - **en**: English.
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description User ID for the administrator to switch to another member\\"s perspective.
     *
     * @example 13760*****718726
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description View type. Values:
     *
     * - 0: Current Alibaba Cloud account view.
     * - 1: View for all accounts under the enterprise.
     *
     * @example 0
     *
     * @var string
     */
    public $roleType;

    /**
     * @description XML configuration information for playbook orchestration.
     *
     * This parameter is required.
     *
     * @example <?xml version=\\"1.0\\" encoding=\\"UTF-8\\"?>
     * <bpmn:definitions xmlns:xsi=\\"http://www.w3.org/2001/XMLSchema-instance\\" xmlns:bpmn=\\"http://www.omg.org/spec/BPMN/20100524/MODEL\\" xmlns:bpmndi=\\"http://www.omg.org/spec/BPMN/20100524/DI\\" xmlns:dc=\\"http://www.omg.org/spec/DD/20100524/DC\\" id=\\"Definitions_1\\" targetNamespace=\\"http://bpmn.io/schema/bpmn\\">
     * <bpmn:process id=\\"Process_1\\" isExecutable=\\"false\\">
     * <bpmn:startEvent id=\\"StartEvent_1\\" />
     * </bpmn:process>
     * <bpmndi:BPMNDiagram id=\\"BPMNDiagram_1\\">
     * <bpmndi:BPMNPlane id=\\"BPMNPlane_1\\" bpmnElement=\\"Process_1\\">
     * <bpmndi:BPMNShape id=\\"_BPMNShape_StartEvent_2\\" bpmnElement=\\"StartEvent_1\\">
     * <dc:Bounds x=\\"173\\" y=\\"102\\" width=\\"36\\" height=\\"36\\" />
     * </bpmndi:BPMNShape>
     * </bpmndi:BPMNPlane>
     * </bpmndi:BPMNDiagram>
     * </bpmn:definitions>
     *
     * @var string
     */
    public $taskflow;
    protected $_name = [
        'lang' => 'Lang',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'taskflow' => 'Taskflow',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->taskflow) {
            $res['Taskflow'] = $this->taskflow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertPlaybookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['Taskflow'])) {
            $model->taskflow = $map['Taskflow'];
        }

        return $model;
    }
}
