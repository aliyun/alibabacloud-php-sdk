<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetTaskResponseBody\task\groupInfo;
use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentJobId;

    /**
     * @var groupInfo
     */
    public $groupInfo;

    /**
     * @var string[]
     */
    public $meta;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string[]
     */
    public $protectionStrategy;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskOutputPath;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerStrategy;
    protected $_name = [
        'autoApply'          => 'autoApply',
        'createTime'         => 'createTime',
        'currentJobId'       => 'currentJobId',
        'groupInfo'          => 'groupInfo',
        'meta'               => 'meta',
        'moduleId'           => 'moduleId',
        'moduleVersion'      => 'moduleVersion',
        'name'               => 'name',
        'parameters'         => 'parameters',
        'protectionStrategy' => 'protectionStrategy',
        'ramRole'            => 'ramRole',
        'status'             => 'status',
        'taskId'             => 'taskId',
        'taskOutputPath'     => 'taskOutputPath',
        'terraformVersion'   => 'terraformVersion',
        'triggerStrategy'    => 'triggerStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->currentJobId) {
            $res['currentJobId'] = $this->currentJobId;
        }
        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toMap() : null;
        }
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->protectionStrategy) {
            $res['protectionStrategy'] = $this->protectionStrategy;
        }
        if (null !== $this->ramRole) {
            $res['ramRole'] = $this->ramRole;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->taskOutputPath) {
            $res['taskOutputPath'] = $this->taskOutputPath;
        }
        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }
        if (null !== $this->triggerStrategy) {
            $res['triggerStrategy'] = $this->triggerStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['currentJobId'])) {
            $model->currentJobId = $map['currentJobId'];
        }
        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['protectionStrategy'])) {
            if (!empty($map['protectionStrategy'])) {
                $model->protectionStrategy = $map['protectionStrategy'];
            }
        }
        if (isset($map['ramRole'])) {
            $model->ramRole = $map['ramRole'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['taskOutputPath'])) {
            $model->taskOutputPath = $map['taskOutputPath'];
        }
        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }
        if (isset($map['triggerStrategy'])) {
            $model->triggerStrategy = $map['triggerStrategy'];
        }

        return $model;
    }
}
