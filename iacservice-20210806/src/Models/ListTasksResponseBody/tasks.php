<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksResponseBody\tasks\groupInfo;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListTasksResponseBody\tasks\tags;

class tasks extends Model
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
     * @var string
     */
    public $currentJobStatus;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var groupInfo
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'autoApply' => 'autoApply',
        'createTime' => 'createTime',
        'currentJobId' => 'currentJobId',
        'currentJobStatus' => 'currentJobStatus',
        'deletionProtection' => 'deletionProtection',
        'groupInfo' => 'groupInfo',
        'moduleId' => 'moduleId',
        'moduleName' => 'moduleName',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'status' => 'status',
        'tags' => 'tags',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->groupInfo) {
            $this->groupInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->currentJobStatus) {
            $res['currentJobStatus'] = $this->currentJobStatus;
        }

        if (null !== $this->deletionProtection) {
            $res['deletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toArray($noStream) : $this->groupInfo;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentJobId'])) {
            $model->currentJobId = $map['currentJobId'];
        }

        if (isset($map['currentJobStatus'])) {
            $model->currentJobStatus = $map['currentJobStatus'];
        }

        if (isset($map['deletionProtection'])) {
            $model->deletionProtection = $map['deletionProtection'];
        }

        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
