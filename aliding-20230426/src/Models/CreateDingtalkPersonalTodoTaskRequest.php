<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskRequest\notifyConfigs;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateDingtalkPersonalTodoTaskRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateDingtalkPersonalTodoTaskRequest extends Model
{
    /**
     * @example 待办备注信息
     *
     * @var string
     */
    public $description;

    /**
     * @example 1703750708595
     *
     * @var int
     */
    public $dueTime;

    /**
     * @description This parameter is required.
     *
     * @example [ "012345" ]
     *
     * @var string[]
     */
    public $executorIds;

    /**
     * @var notifyConfigs
     */
    public $notifyConfigs;

    /**
     * @example [ "012345" ]
     *
     * @var string[]
     */
    public $participantIds;

    /**
     * @description This parameter is required.
     *
     * @example 待办标题
     *
     * @var string
     */
    public $subject;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @example 用户token
     *
     * @var string
     */
    public $userToken;
    protected $_name = [
        'description'    => 'Description',
        'dueTime'        => 'DueTime',
        'executorIds'    => 'ExecutorIds',
        'notifyConfigs'  => 'NotifyConfigs',
        'participantIds' => 'ParticipantIds',
        'subject'        => 'Subject',
        'tenantContext'  => 'TenantContext',
        'userToken'      => 'UserToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dueTime) {
            $res['DueTime'] = $this->dueTime;
        }
        if (null !== $this->executorIds) {
            $res['ExecutorIds'] = $this->executorIds;
        }
        if (null !== $this->notifyConfigs) {
            $res['NotifyConfigs'] = null !== $this->notifyConfigs ? $this->notifyConfigs->toMap() : null;
        }
        if (null !== $this->participantIds) {
            $res['ParticipantIds'] = $this->participantIds;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->userToken) {
            $res['UserToken'] = $this->userToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDingtalkPersonalTodoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DueTime'])) {
            $model->dueTime = $map['DueTime'];
        }
        if (isset($map['ExecutorIds'])) {
            if (!empty($map['ExecutorIds'])) {
                $model->executorIds = $map['ExecutorIds'];
            }
        }
        if (isset($map['NotifyConfigs'])) {
            $model->notifyConfigs = notifyConfigs::fromMap($map['NotifyConfigs']);
        }
        if (isset($map['ParticipantIds'])) {
            if (!empty($map['ParticipantIds'])) {
                $model->participantIds = $map['ParticipantIds'];
            }
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['UserToken'])) {
            $model->userToken = $map['UserToken'];
        }

        return $model;
    }
}
