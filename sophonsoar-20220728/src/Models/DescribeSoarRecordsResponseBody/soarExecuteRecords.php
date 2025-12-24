<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarRecordsResponseBody\soarExecuteRecords\outputList;

class soarExecuteRecords extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var outputList[]
     */
    public $outputList;

    /**
     * @var string
     */
    public $rawEventReq;

    /**
     * @var string
     */
    public $requestUuid;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskflowMd5;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'endTime' => 'EndTime',
        'errorMsg' => 'ErrorMsg',
        'outputList' => 'OutputList',
        'rawEventReq' => 'RawEventReq',
        'requestUuid' => 'RequestUuid',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskName' => 'TaskName',
        'taskflowMd5' => 'TaskflowMd5',
        'triggerType' => 'TriggerType',
        'triggerUser' => 'TriggerUser',
    ];

    public function validate()
    {
        if (\is_array($this->outputList)) {
            Model::validateArray($this->outputList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->outputList) {
            if (\is_array($this->outputList)) {
                $res['OutputList'] = [];
                $n1 = 0;
                foreach ($this->outputList as $item1) {
                    $res['OutputList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rawEventReq) {
            $res['RawEventReq'] = $this->rawEventReq;
        }

        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->triggerUser) {
            $res['TriggerUser'] = $this->triggerUser;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['OutputList'])) {
            if (!empty($map['OutputList'])) {
                $model->outputList = [];
                $n1 = 0;
                foreach ($map['OutputList'] as $item1) {
                    $model->outputList[$n1] = outputList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RawEventReq'])) {
            $model->rawEventReq = $map['RawEventReq'];
        }

        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['TriggerUser'])) {
            $model->triggerUser = $map['TriggerUser'];
        }

        return $model;
    }
}
