<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;

class AppMaterialTask extends Model
{
    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $completeTimeFormat;

    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string[]
     */
    public $finalFileUrls;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;

    /**
     * @var string
     */
    public $submitTime;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskParam;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'completeTimeFormat' => 'CompleteTimeFormat',
        'failReason' => 'FailReason',
        'finalFileUrls' => 'FinalFileUrls',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
        'submitTime' => 'SubmitTime',
        'taskId' => 'TaskId',
        'taskParam' => 'TaskParam',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->finalFileUrls)) {
            Model::validateArray($this->finalFileUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }

        if (null !== $this->completeTimeFormat) {
            $res['CompleteTimeFormat'] = $this->completeTimeFormat;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->finalFileUrls) {
            if (\is_array($this->finalFileUrls)) {
                $res['FinalFileUrls'] = [];
                $n1 = 0;
                foreach ($this->finalFileUrls as $item1) {
                    $res['FinalFileUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }

        if (isset($map['CompleteTimeFormat'])) {
            $model->completeTimeFormat = $map['CompleteTimeFormat'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['FinalFileUrls'])) {
            if (!empty($map['FinalFileUrls'])) {
                $model->finalFileUrls = [];
                $n1 = 0;
                foreach ($map['FinalFileUrls'] as $item1) {
                    $model->finalFileUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
