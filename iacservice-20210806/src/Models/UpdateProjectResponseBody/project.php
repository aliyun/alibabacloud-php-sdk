<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateProjectResponseBody;

use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $groupCnt;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $taskCnt;
    protected $_name = [
        'createTime'  => 'createTime',
        'description' => 'description',
        'groupCnt'    => 'groupCnt',
        'id'          => 'id',
        'name'        => 'name',
        'taskCnt'     => 'taskCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->groupCnt) {
            $res['groupCnt'] = $this->groupCnt;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->taskCnt) {
            $res['taskCnt'] = $this->taskCnt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['groupCnt'])) {
            $model->groupCnt = $map['groupCnt'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['taskCnt'])) {
            $model->taskCnt = $map['taskCnt'];
        }

        return $model;
    }
}
