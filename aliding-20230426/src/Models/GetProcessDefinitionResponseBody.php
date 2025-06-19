<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\originator;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\owners;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetProcessDefinitionResponseBody\tasks;

class GetProcessDefinitionResponseBody extends Model
{
    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var originator
     */
    public $originator;

    /**
     * @var string
     */
    public $outResult;

    /**
     * @var owners[]
     */
    public $owners;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @var string
     */
    public $title;

    /**
     * @var mixed[]
     */
    public $variables;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'formUuid' => 'formUuid',
        'originator' => 'originator',
        'outResult' => 'outResult',
        'owners' => 'owners',
        'processId' => 'processId',
        'processInstanceId' => 'processInstanceId',
        'requestId' => 'requestId',
        'status' => 'status',
        'tasks' => 'tasks',
        'title' => 'title',
        'variables' => 'variables',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (null !== $this->originator) {
            $this->originator->validate();
        }
        if (\is_array($this->owners)) {
            Model::validateArray($this->owners);
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formUuid) {
            $res['formUuid'] = $this->formUuid;
        }

        if (null !== $this->originator) {
            $res['originator'] = null !== $this->originator ? $this->originator->toArray($noStream) : $this->originator;
        }

        if (null !== $this->outResult) {
            $res['outResult'] = $this->outResult;
        }

        if (null !== $this->owners) {
            if (\is_array($this->owners)) {
                $res['owners'] = [];
                $n1 = 0;
                foreach ($this->owners as $item1) {
                    $res['owners'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->processId) {
            $res['processId'] = $this->processId;
        }

        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['variables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['formUuid'])) {
            $model->formUuid = $map['formUuid'];
        }

        if (isset($map['originator'])) {
            $model->originator = originator::fromMap($map['originator']);
        }

        if (isset($map['outResult'])) {
            $model->outResult = $map['outResult'];
        }

        if (isset($map['owners'])) {
            if (!empty($map['owners'])) {
                $model->owners = [];
                $n1 = 0;
                foreach ($map['owners'] as $item1) {
                    $model->owners[$n1] = owners::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['processId'])) {
            $model->processId = $map['processId'];
        }

        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['tasks'] as $item1) {
                    $model->tasks[$n1] = tasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                foreach ($map['variables'] as $key1 => $value1) {
                    $model->variables[$key1] = $value1;
                }
            }
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
