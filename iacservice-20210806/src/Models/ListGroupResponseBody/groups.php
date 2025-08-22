<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupResponseBody\groups\tags;

class groups extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $moduleCnt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $sceneTestingTaskCnt;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $taskCnt;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'groupId' => 'groupId',
        'isDefault' => 'isDefault',
        'moduleCnt' => 'moduleCnt',
        'name' => 'name',
        'projectId' => 'projectId',
        'sceneTestingTaskCnt' => 'sceneTestingTaskCnt',
        'tags' => 'tags',
        'taskCnt' => 'taskCnt',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
        }

        if (null !== $this->moduleCnt) {
            $res['moduleCnt'] = $this->moduleCnt;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        if (null !== $this->sceneTestingTaskCnt) {
            $res['sceneTestingTaskCnt'] = $this->sceneTestingTaskCnt;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskCnt) {
            $res['taskCnt'] = $this->taskCnt;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
        }

        if (isset($map['moduleCnt'])) {
            $model->moduleCnt = $map['moduleCnt'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['sceneTestingTaskCnt'])) {
            $model->sceneTestingTaskCnt = $map['sceneTestingTaskCnt'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskCnt'])) {
            $model->taskCnt = $map['taskCnt'];
        }

        return $model;
    }
}
