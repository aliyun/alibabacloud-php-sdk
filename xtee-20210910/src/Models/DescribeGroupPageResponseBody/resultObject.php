<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeGroupPageResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $communityNo;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $groupRisk;

    /**
     * @var string
     */
    public $groupScale;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'communityNo' => 'communityNo',
        'createTime' => 'createTime',
        'groupRisk' => 'groupRisk',
        'groupScale' => 'groupScale',
        'id' => 'id',
        'sceneName' => 'sceneName',
        'taskId' => 'taskId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->communityNo) {
            $res['communityNo'] = $this->communityNo;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->groupRisk) {
            $res['groupRisk'] = $this->groupRisk;
        }

        if (null !== $this->groupScale) {
            $res['groupScale'] = $this->groupScale;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['communityNo'])) {
            $model->communityNo = $map['communityNo'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['groupRisk'])) {
            $model->groupRisk = $map['groupRisk'];
        }

        if (isset($map['groupScale'])) {
            $model->groupScale = $map['groupScale'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['sceneName'])) {
            $model->sceneName = $map['sceneName'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
