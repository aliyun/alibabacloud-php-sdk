<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListTodoOpsTaskApprovalsResponseBody;

use AlibabaCloud\Dara\Model;

class approves extends Model
{
    /**
     * @var int
     */
    public $applyAt;

    /**
     * @var string
     */
    public $approveId;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var int
     */
    public $clientUid;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'applyAt' => 'ApplyAt',
        'approveId' => 'ApproveId',
        'clientName' => 'ClientName',
        'clientUid' => 'ClientUid',
        'comment' => 'Comment',
        'name' => 'Name',
        'scheduleType' => 'ScheduleType',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyAt) {
            $res['ApplyAt'] = $this->applyAt;
        }

        if (null !== $this->approveId) {
            $res['ApproveId'] = $this->approveId;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }

        if (null !== $this->clientUid) {
            $res['ClientUid'] = $this->clientUid;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ApplyAt'])) {
            $model->applyAt = $map['ApplyAt'];
        }

        if (isset($map['ApproveId'])) {
            $model->approveId = $map['ApproveId'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }

        if (isset($map['ClientUid'])) {
            $model->clientUid = $map['ClientUid'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
