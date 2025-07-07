<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody\data\todoList\fromLe;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody\data\todoList\processList;
use AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseTodoQueryAccountTodoListResponseBody\data\todoList\toLe;

class todoList extends Model
{
    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $applicantAliyunId;

    /**
     * @var string
     */
    public $applicantPk;

    /**
     * @var string
     */
    public $applyRemark;

    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var string
     */
    public $auditorAliyunId;

    /**
     * @var string
     */
    public $auditorPk;

    /**
     * @var string
     */
    public $auditorStatus;

    /**
     * @var int
     */
    public $canceledTime;

    /**
     * @var bool
     */
    public $closed;

    /**
     * @var bool
     */
    public $currAuditor;

    /**
     * @var fromLe
     */
    public $fromLe;

    /**
     * @var string
     */
    public $pk;

    /**
     * @var processList[]
     */
    public $processList;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeoutTime;

    /**
     * @var toLe
     */
    public $toLe;

    /**
     * @var bool
     */
    public $toLeAudit;

    /**
     * @var string
     */
    public $todoId;

    /**
     * @var string
     */
    public $todoType;

    /**
     * @var string
     */
    public $todoView;
    protected $_name = [
        'aliyunId' => 'AliyunId',
        'applicantAliyunId' => 'ApplicantAliyunId',
        'applicantPk' => 'ApplicantPk',
        'applyRemark' => 'ApplyRemark',
        'applyTime' => 'ApplyTime',
        'auditorAliyunId' => 'AuditorAliyunId',
        'auditorPk' => 'AuditorPk',
        'auditorStatus' => 'AuditorStatus',
        'canceledTime' => 'CanceledTime',
        'closed' => 'Closed',
        'currAuditor' => 'CurrAuditor',
        'fromLe' => 'FromLe',
        'pk' => 'Pk',
        'processList' => 'ProcessList',
        'status' => 'Status',
        'timeoutTime' => 'TimeoutTime',
        'toLe' => 'ToLe',
        'toLeAudit' => 'ToLeAudit',
        'todoId' => 'TodoId',
        'todoType' => 'TodoType',
        'todoView' => 'TodoView',
    ];

    public function validate()
    {
        if (null !== $this->fromLe) {
            $this->fromLe->validate();
        }
        if (\is_array($this->processList)) {
            Model::validateArray($this->processList);
        }
        if (null !== $this->toLe) {
            $this->toLe->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->applicantAliyunId) {
            $res['ApplicantAliyunId'] = $this->applicantAliyunId;
        }

        if (null !== $this->applicantPk) {
            $res['ApplicantPk'] = $this->applicantPk;
        }

        if (null !== $this->applyRemark) {
            $res['ApplyRemark'] = $this->applyRemark;
        }

        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->auditorAliyunId) {
            $res['AuditorAliyunId'] = $this->auditorAliyunId;
        }

        if (null !== $this->auditorPk) {
            $res['AuditorPk'] = $this->auditorPk;
        }

        if (null !== $this->auditorStatus) {
            $res['AuditorStatus'] = $this->auditorStatus;
        }

        if (null !== $this->canceledTime) {
            $res['CanceledTime'] = $this->canceledTime;
        }

        if (null !== $this->closed) {
            $res['Closed'] = $this->closed;
        }

        if (null !== $this->currAuditor) {
            $res['CurrAuditor'] = $this->currAuditor;
        }

        if (null !== $this->fromLe) {
            $res['FromLe'] = null !== $this->fromLe ? $this->fromLe->toArray($noStream) : $this->fromLe;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->processList) {
            if (\is_array($this->processList)) {
                $res['ProcessList'] = [];
                $n1 = 0;
                foreach ($this->processList as $item1) {
                    $res['ProcessList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timeoutTime) {
            $res['TimeoutTime'] = $this->timeoutTime;
        }

        if (null !== $this->toLe) {
            $res['ToLe'] = null !== $this->toLe ? $this->toLe->toArray($noStream) : $this->toLe;
        }

        if (null !== $this->toLeAudit) {
            $res['ToLeAudit'] = $this->toLeAudit;
        }

        if (null !== $this->todoId) {
            $res['TodoId'] = $this->todoId;
        }

        if (null !== $this->todoType) {
            $res['TodoType'] = $this->todoType;
        }

        if (null !== $this->todoView) {
            $res['TodoView'] = $this->todoView;
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
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['ApplicantAliyunId'])) {
            $model->applicantAliyunId = $map['ApplicantAliyunId'];
        }

        if (isset($map['ApplicantPk'])) {
            $model->applicantPk = $map['ApplicantPk'];
        }

        if (isset($map['ApplyRemark'])) {
            $model->applyRemark = $map['ApplyRemark'];
        }

        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['AuditorAliyunId'])) {
            $model->auditorAliyunId = $map['AuditorAliyunId'];
        }

        if (isset($map['AuditorPk'])) {
            $model->auditorPk = $map['AuditorPk'];
        }

        if (isset($map['AuditorStatus'])) {
            $model->auditorStatus = $map['AuditorStatus'];
        }

        if (isset($map['CanceledTime'])) {
            $model->canceledTime = $map['CanceledTime'];
        }

        if (isset($map['Closed'])) {
            $model->closed = $map['Closed'];
        }

        if (isset($map['CurrAuditor'])) {
            $model->currAuditor = $map['CurrAuditor'];
        }

        if (isset($map['FromLe'])) {
            $model->fromLe = fromLe::fromMap($map['FromLe']);
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['ProcessList'])) {
            if (!empty($map['ProcessList'])) {
                $model->processList = [];
                $n1 = 0;
                foreach ($map['ProcessList'] as $item1) {
                    $model->processList[$n1] = processList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimeoutTime'])) {
            $model->timeoutTime = $map['TimeoutTime'];
        }

        if (isset($map['ToLe'])) {
            $model->toLe = toLe::fromMap($map['ToLe']);
        }

        if (isset($map['ToLeAudit'])) {
            $model->toLeAudit = $map['ToLeAudit'];
        }

        if (isset($map['TodoId'])) {
            $model->todoId = $map['TodoId'];
        }

        if (isset($map['TodoType'])) {
            $model->todoType = $map['TodoType'];
        }

        if (isset($map['TodoView'])) {
            $model->todoView = $map['TodoView'];
        }

        return $model;
    }
}
