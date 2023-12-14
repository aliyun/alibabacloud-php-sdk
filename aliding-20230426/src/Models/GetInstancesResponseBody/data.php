<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponseBody\data\actionExecutor;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetInstancesResponseBody\data\originator;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @example 2021-05-01
     *
     * @var string
     */
    public $createTimeGMT;

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
     * @example 2021-05-01
     *
     * @var string
     */
    public $modifiedTimeGMT;

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
     * @example f30233fb-72e1-4af4-8cb8-c7e0ea9ee530
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example 小红发起的请购单
     *
     * @var string
     */
    public $title;

    /**
     * @example 1.0
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'actionExecutor'    => 'ActionExecutor',
        'approvedResult'    => 'ApprovedResult',
        'createTimeGMT'     => 'CreateTimeGMT',
        'data'              => 'Data',
        'formUuid'          => 'FormUuid',
        'instanceStatus'    => 'InstanceStatus',
        'modifiedTimeGMT'   => 'ModifiedTimeGMT',
        'originator'        => 'Originator',
        'processCode'       => 'ProcessCode',
        'processInstanceId' => 'ProcessInstanceId',
        'title'             => 'Title',
        'version'           => 'Version',
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
        if (null !== $this->createTimeGMT) {
            $res['CreateTimeGMT'] = $this->createTimeGMT;
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
        if (null !== $this->modifiedTimeGMT) {
            $res['ModifiedTimeGMT'] = $this->modifiedTimeGMT;
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['CreateTimeGMT'])) {
            $model->createTimeGMT = $map['CreateTimeGMT'];
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
        if (isset($map['ModifiedTimeGMT'])) {
            $model->modifiedTimeGMT = $map['ModifiedTimeGMT'];
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
