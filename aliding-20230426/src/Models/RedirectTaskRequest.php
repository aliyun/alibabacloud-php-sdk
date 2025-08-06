<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class RedirectTaskRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $byManager;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $nowActionExecutorId;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $systemToken;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'appType' => 'AppType',
        'byManager' => 'ByManager',
        'language' => 'Language',
        'nowActionExecutorId' => 'NowActionExecutorId',
        'processInstanceId' => 'ProcessInstanceId',
        'remark' => 'Remark',
        'systemToken' => 'SystemToken',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->byManager) {
            $res['ByManager'] = $this->byManager;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->nowActionExecutorId) {
            $res['NowActionExecutorId'] = $this->nowActionExecutorId;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['ByManager'])) {
            $model->byManager = $map['ByManager'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['NowActionExecutorId'])) {
            $model->nowActionExecutorId = $map['NowActionExecutorId'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
