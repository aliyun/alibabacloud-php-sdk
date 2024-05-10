<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class RedirectTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_PBKxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example y
     *
     * @var string
     */
    public $byManager;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @description This parameter is required.
     *
     * @example 123456
     *
     * @var string
     */
    public $nowActionExecutorId;

    /**
     * @description This parameter is required.
     *
     * @example instxxxx
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @example remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description This parameter is required.
     *
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;

    /**
     * @description This parameter is required.
     *
     * @example hexxxx
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'appType'             => 'AppType',
        'byManager'           => 'ByManager',
        'language'            => 'Language',
        'nowActionExecutorId' => 'NowActionExecutorId',
        'processInstanceId'   => 'ProcessInstanceId',
        'remark'              => 'Remark',
        'systemToken'         => 'SystemToken',
        'taskId'              => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RedirectTaskRequest
     */
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
