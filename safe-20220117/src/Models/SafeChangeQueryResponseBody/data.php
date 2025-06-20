<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeQueryResponseBody\data\changeTimes;

class data extends Model
{
    /**
     * @var string
     */
    public $approveResultUrl;

    /**
     * @var string
     */
    public $approveStatus;

    /**
     * @var string
     */
    public $changeCancel;

    /**
     * @var int
     */
    public $changeEndTime;

    /**
     * @var string
     */
    public $changeObject;

    /**
     * @var string
     */
    public $changeOptType;

    /**
     * @var string
     */
    public $changeResult;

    /**
     * @var int
     */
    public $changeStartTime;

    /**
     * @var string
     */
    public $changeStatus;

    /**
     * @var string
     */
    public $changeSystem;

    /**
     * @var changeTimes[]
     */
    public $changeTimes;

    /**
     * @var string
     */
    public $changeTitle;

    /**
     * @var string
     */
    public $checkResultUrl;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var string[]
     */
    public $checkholdReason;

    /**
     * @var string
     */
    public $executorEmpId;

    /**
     * @var string
     */
    public $executorEmpName;

    /**
     * @var string
     */
    public $sourceOrderId;
    protected $_name = [
        'approveResultUrl' => 'ApproveResultUrl',
        'approveStatus' => 'ApproveStatus',
        'changeCancel' => 'ChangeCancel',
        'changeEndTime' => 'ChangeEndTime',
        'changeObject' => 'ChangeObject',
        'changeOptType' => 'ChangeOptType',
        'changeResult' => 'ChangeResult',
        'changeStartTime' => 'ChangeStartTime',
        'changeStatus' => 'ChangeStatus',
        'changeSystem' => 'ChangeSystem',
        'changeTimes' => 'ChangeTimes',
        'changeTitle' => 'ChangeTitle',
        'checkResultUrl' => 'CheckResultUrl',
        'checkStatus' => 'CheckStatus',
        'checkholdReason' => 'CheckholdReason',
        'executorEmpId' => 'ExecutorEmpId',
        'executorEmpName' => 'ExecutorEmpName',
        'sourceOrderId' => 'SourceOrderId',
    ];

    public function validate()
    {
        if (\is_array($this->changeTimes)) {
            Model::validateArray($this->changeTimes);
        }
        if (\is_array($this->checkholdReason)) {
            Model::validateArray($this->checkholdReason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveResultUrl) {
            $res['ApproveResultUrl'] = $this->approveResultUrl;
        }

        if (null !== $this->approveStatus) {
            $res['ApproveStatus'] = $this->approveStatus;
        }

        if (null !== $this->changeCancel) {
            $res['ChangeCancel'] = $this->changeCancel;
        }

        if (null !== $this->changeEndTime) {
            $res['ChangeEndTime'] = $this->changeEndTime;
        }

        if (null !== $this->changeObject) {
            $res['ChangeObject'] = $this->changeObject;
        }

        if (null !== $this->changeOptType) {
            $res['ChangeOptType'] = $this->changeOptType;
        }

        if (null !== $this->changeResult) {
            $res['ChangeResult'] = $this->changeResult;
        }

        if (null !== $this->changeStartTime) {
            $res['ChangeStartTime'] = $this->changeStartTime;
        }

        if (null !== $this->changeStatus) {
            $res['ChangeStatus'] = $this->changeStatus;
        }

        if (null !== $this->changeSystem) {
            $res['ChangeSystem'] = $this->changeSystem;
        }

        if (null !== $this->changeTimes) {
            if (\is_array($this->changeTimes)) {
                $res['ChangeTimes'] = [];
                $n1 = 0;
                foreach ($this->changeTimes as $item1) {
                    $res['ChangeTimes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeTitle) {
            $res['ChangeTitle'] = $this->changeTitle;
        }

        if (null !== $this->checkResultUrl) {
            $res['CheckResultUrl'] = $this->checkResultUrl;
        }

        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->checkholdReason) {
            if (\is_array($this->checkholdReason)) {
                $res['CheckholdReason'] = [];
                $n1 = 0;
                foreach ($this->checkholdReason as $item1) {
                    $res['CheckholdReason'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->executorEmpId) {
            $res['ExecutorEmpId'] = $this->executorEmpId;
        }

        if (null !== $this->executorEmpName) {
            $res['ExecutorEmpName'] = $this->executorEmpName;
        }

        if (null !== $this->sourceOrderId) {
            $res['SourceOrderId'] = $this->sourceOrderId;
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
        if (isset($map['ApproveResultUrl'])) {
            $model->approveResultUrl = $map['ApproveResultUrl'];
        }

        if (isset($map['ApproveStatus'])) {
            $model->approveStatus = $map['ApproveStatus'];
        }

        if (isset($map['ChangeCancel'])) {
            $model->changeCancel = $map['ChangeCancel'];
        }

        if (isset($map['ChangeEndTime'])) {
            $model->changeEndTime = $map['ChangeEndTime'];
        }

        if (isset($map['ChangeObject'])) {
            $model->changeObject = $map['ChangeObject'];
        }

        if (isset($map['ChangeOptType'])) {
            $model->changeOptType = $map['ChangeOptType'];
        }

        if (isset($map['ChangeResult'])) {
            $model->changeResult = $map['ChangeResult'];
        }

        if (isset($map['ChangeStartTime'])) {
            $model->changeStartTime = $map['ChangeStartTime'];
        }

        if (isset($map['ChangeStatus'])) {
            $model->changeStatus = $map['ChangeStatus'];
        }

        if (isset($map['ChangeSystem'])) {
            $model->changeSystem = $map['ChangeSystem'];
        }

        if (isset($map['ChangeTimes'])) {
            if (!empty($map['ChangeTimes'])) {
                $model->changeTimes = [];
                $n1 = 0;
                foreach ($map['ChangeTimes'] as $item1) {
                    $model->changeTimes[$n1] = changeTimes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ChangeTitle'])) {
            $model->changeTitle = $map['ChangeTitle'];
        }

        if (isset($map['CheckResultUrl'])) {
            $model->checkResultUrl = $map['CheckResultUrl'];
        }

        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['CheckholdReason'])) {
            if (!empty($map['CheckholdReason'])) {
                $model->checkholdReason = [];
                $n1 = 0;
                foreach ($map['CheckholdReason'] as $item1) {
                    $model->checkholdReason[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExecutorEmpId'])) {
            $model->executorEmpId = $map['ExecutorEmpId'];
        }

        if (isset($map['ExecutorEmpName'])) {
            $model->executorEmpName = $map['ExecutorEmpName'];
        }

        if (isset($map['SourceOrderId'])) {
            $model->sourceOrderId = $map['SourceOrderId'];
        }

        return $model;
    }
}
