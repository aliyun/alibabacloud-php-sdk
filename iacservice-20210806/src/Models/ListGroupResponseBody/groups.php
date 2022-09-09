<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListGroupResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $id;

    /**
     * @var bool
     */
    public $isDefault;

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
        'createTime'  => 'createTime',
        'description' => 'description',
        'id'          => 'id',
        'isDefault'   => 'isDefault',
        'name'        => 'name',
        'projectId'   => 'projectId',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isDefault) {
            $res['isDefault'] = $this->isDefault;
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

    /**
     * @param array $map
     *
     * @return groups
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isDefault'])) {
            $model->isDefault = $map['isDefault'];
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
