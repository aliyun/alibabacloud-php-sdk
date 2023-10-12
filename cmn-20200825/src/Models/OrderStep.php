<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\OrderStep\restriction;
use AlibabaCloud\Tea\Model;

class OrderStep extends Model
{
    /**
     * @var string
     */
    public $displayMethod;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $jobKwargs;

    /**
     * @var string
     */
    public $jobMessage;

    /**
     * @var string
     */
    public $jobReturnStatus;

    /**
     * @var string
     */
    public $jobReturnValues;

    /**
     * @var string
     */
    public $jobSystem;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderStepId;

    /**
     * @var string
     */
    public $realNextStep;

    /**
     * @var restriction[]
     */
    public $restriction;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepStatus;

    /**
     * @var string
     */
    public $stepTitle;

    /**
     * @var string
     */
    public $stepType;
    protected $_name = [
        'displayMethod'   => 'DisplayMethod',
        'gmtCreate'       => 'GmtCreate',
        'gmtModify'       => 'GmtModify',
        'jobKwargs'       => 'JobKwargs',
        'jobMessage'      => 'JobMessage',
        'jobReturnStatus' => 'JobReturnStatus',
        'jobReturnValues' => 'JobReturnValues',
        'jobSystem'       => 'JobSystem',
        'orderId'         => 'OrderId',
        'orderStepId'     => 'OrderStepId',
        'realNextStep'    => 'RealNextStep',
        'restriction'     => 'Restriction',
        'stepName'        => 'StepName',
        'stepStatus'      => 'StepStatus',
        'stepTitle'       => 'StepTitle',
        'stepType'        => 'StepType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayMethod) {
            $res['DisplayMethod'] = $this->displayMethod;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->jobKwargs) {
            $res['JobKwargs'] = $this->jobKwargs;
        }
        if (null !== $this->jobMessage) {
            $res['JobMessage'] = $this->jobMessage;
        }
        if (null !== $this->jobReturnStatus) {
            $res['JobReturnStatus'] = $this->jobReturnStatus;
        }
        if (null !== $this->jobReturnValues) {
            $res['JobReturnValues'] = $this->jobReturnValues;
        }
        if (null !== $this->jobSystem) {
            $res['JobSystem'] = $this->jobSystem;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderStepId) {
            $res['OrderStepId'] = $this->orderStepId;
        }
        if (null !== $this->realNextStep) {
            $res['RealNextStep'] = $this->realNextStep;
        }
        if (null !== $this->restriction) {
            $res['Restriction'] = [];
            if (null !== $this->restriction && \is_array($this->restriction)) {
                $n = 0;
                foreach ($this->restriction as $item) {
                    $res['Restriction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }
        if (null !== $this->stepStatus) {
            $res['StepStatus'] = $this->stepStatus;
        }
        if (null !== $this->stepTitle) {
            $res['StepTitle'] = $this->stepTitle;
        }
        if (null !== $this->stepType) {
            $res['StepType'] = $this->stepType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderStep
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayMethod'])) {
            $model->displayMethod = $map['DisplayMethod'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['JobKwargs'])) {
            $model->jobKwargs = $map['JobKwargs'];
        }
        if (isset($map['JobMessage'])) {
            $model->jobMessage = $map['JobMessage'];
        }
        if (isset($map['JobReturnStatus'])) {
            $model->jobReturnStatus = $map['JobReturnStatus'];
        }
        if (isset($map['JobReturnValues'])) {
            $model->jobReturnValues = $map['JobReturnValues'];
        }
        if (isset($map['JobSystem'])) {
            $model->jobSystem = $map['JobSystem'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderStepId'])) {
            $model->orderStepId = $map['OrderStepId'];
        }
        if (isset($map['RealNextStep'])) {
            $model->realNextStep = $map['RealNextStep'];
        }
        if (isset($map['Restriction'])) {
            if (!empty($map['Restriction'])) {
                $model->restriction = [];
                $n                  = 0;
                foreach ($map['Restriction'] as $item) {
                    $model->restriction[$n++] = null !== $item ? restriction::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }
        if (isset($map['StepStatus'])) {
            $model->stepStatus = $map['StepStatus'];
        }
        if (isset($map['StepTitle'])) {
            $model->stepTitle = $map['StepTitle'];
        }
        if (isset($map['StepType'])) {
            $model->stepType = $map['StepType'];
        }

        return $model;
    }
}
