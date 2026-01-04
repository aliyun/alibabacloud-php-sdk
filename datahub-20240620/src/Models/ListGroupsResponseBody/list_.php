<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models\ListGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string[]
     */
    public $topicList;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'groupName' => 'GroupName',
        'projectName' => 'ProjectName',
        'topicList' => 'TopicList',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->topicList)) {
            Model::validateArray($this->topicList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->topicList) {
            if (\is_array($this->topicList)) {
                $res['TopicList'] = [];
                $n1 = 0;
                foreach ($this->topicList as $item1) {
                    $res['TopicList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['TopicList'])) {
            if (!empty($map['TopicList'])) {
                $model->topicList = [];
                $n1 = 0;
                foreach ($map['TopicList'] as $item1) {
                    $model->topicList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
