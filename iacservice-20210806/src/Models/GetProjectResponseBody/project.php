<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetProjectResponseBody;

use AlibabaCloud\Dara\Model;

class project extends Model
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
    public $name;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $taskCnt;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'name' => 'name',
        'projectId' => 'projectId',
        'taskCnt' => 'taskCnt',
    ];

    public function validate()
    {
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        if (isset($map['taskCnt'])) {
            $model->taskCnt = $map['taskCnt'];
        }

        return $model;
    }
}
