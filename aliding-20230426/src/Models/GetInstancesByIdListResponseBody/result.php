<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListResponseBody\result\actionExecutor;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesByIdListResponseBody\result\originator;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var actionExecutor[]
     */
    public $actionExecutor;

    /**
     * @example agree
     *
     * @var string
     */
    public $approvedResult;

    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @example FORM-EF6Y4G8WO2FN0SUB43TDQ3CGC3FMFQ1G9400RCJ3
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @var originator
     */
    public $originator;

    /**
     * @example TPROC--X1Gxxx
     *
     * @var string
     */
    public $processCode;

    /**
     * @example f30233fb-72e1-4xxx
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example 李四发起的请购单
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'actionExecutor'    => 'ActionExecutor',
        'approvedResult'    => 'ApprovedResult',
        'data'              => 'Data',
        'formUuid'          => 'FormUuid',
        'instanceStatus'    => 'InstanceStatus',
        'originator'        => 'Originator',
        'processCode'       => 'ProcessCode',
        'processInstanceId' => 'ProcessInstanceId',
        'title'             => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionExecutor) {
            $res['ActionExecutor'] = [];
            if (null !== $this->actionExecutor && \is_array($this->actionExecutor)) {
                $n = 0;
                foreach ($this->actionExecutor as $item) {
                    $res['ActionExecutor'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->approvedResult) {
            $res['ApprovedResult'] = $this->approvedResult;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->originator) {
            $res['Originator'] = null !== $this->originator ? $this->originator->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionExecutor'])) {
            if (!empty($map['ActionExecutor'])) {
                $model->actionExecutor = [];
                $n                     = 0;
                foreach ($map['ActionExecutor'] as $item) {
                    $model->actionExecutor[$n++] = null !== $item ? actionExecutor::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ApprovedResult'])) {
            $model->approvedResult = $map['ApprovedResult'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
