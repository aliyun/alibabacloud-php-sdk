<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListResponseBody\result\actionExecutor;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListResponseBody\result\originator;

class result extends Model
{
    /**
     * @var actionExecutor[]
     */
    public $actionExecutor;

    /**
     * @var string
     */
    public $approvedResult;

    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var string
     */
    public $formUuid;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var originator
     */
    public $originator;

    /**
     * @var string
     */
    public $processCode;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'actionExecutor' => 'ActionExecutor',
        'approvedResult' => 'ApprovedResult',
        'data' => 'Data',
        'formUuid' => 'FormUuid',
        'instanceStatus' => 'InstanceStatus',
        'originator' => 'Originator',
        'processCode' => 'ProcessCode',
        'processInstanceId' => 'ProcessInstanceId',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->actionExecutor)) {
            Model::validateArray($this->actionExecutor);
        }
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->originator) {
            $this->originator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionExecutor) {
            if (\is_array($this->actionExecutor)) {
                $res['ActionExecutor'] = [];
                $n1 = 0;
                foreach ($this->actionExecutor as $item1) {
                    $res['ActionExecutor'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->approvedResult) {
            $res['ApprovedResult'] = $this->approvedResult;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['Data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->originator) {
            $res['Originator'] = null !== $this->originator ? $this->originator->toArray($noStream) : $this->originator;
        }

        if (null !== $this->processCode) {
            $res['ProcessCode'] = $this->processCode;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['ActionExecutor'])) {
            if (!empty($map['ActionExecutor'])) {
                $model->actionExecutor = [];
                $n1 = 0;
                foreach ($map['ActionExecutor'] as $item1) {
                    $model->actionExecutor[$n1] = actionExecutor::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ApprovedResult'])) {
            $model->approvedResult = $map['ApprovedResult'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                foreach ($map['Data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['Originator'])) {
            $model->originator = originator::fromMap($map['Originator']);
        }

        if (isset($map['ProcessCode'])) {
            $model->processCode = $map['ProcessCode'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
