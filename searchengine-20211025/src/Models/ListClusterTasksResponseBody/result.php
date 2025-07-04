<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterTasksResponseBody\result\tags;
use AlibabaCloud\SDK\Searchengine\V20211025\Models\ListClusterTasksResponseBody\result\taskNodes;

class result extends Model
{
    /**
     * @var string
     */
    public $extraAttribute;

    /**
     * @var string
     */
    public $field3;

    /**
     * @var string
     */
    public $fsmId;

    /**
     * @var string
     */
    public $groupType;

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
     * @var taskNodes[]
     */
    public $taskNodes;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'extraAttribute' => 'extraAttribute',
        'field3' => 'field3',
        'fsmId' => 'fsmId',
        'groupType' => 'groupType',
        'name' => 'name',
        'status' => 'status',
        'tags' => 'tags',
        'taskNodes' => 'taskNodes',
        'time' => 'time',
        'type' => 'type',
        'user' => 'user',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->taskNodes)) {
            Model::validateArray($this->taskNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraAttribute) {
            $res['extraAttribute'] = $this->extraAttribute;
        }

        if (null !== $this->field3) {
            $res['field3'] = $this->field3;
        }

        if (null !== $this->fsmId) {
            $res['fsmId'] = $this->fsmId;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
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
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskNodes) {
            if (\is_array($this->taskNodes)) {
                $res['taskNodes'] = [];
                $n1 = 0;
                foreach ($this->taskNodes as $item1) {
                    $res['taskNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->user) {
            $res['user'] = $this->user;
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
        if (isset($map['extraAttribute'])) {
            $model->extraAttribute = $map['extraAttribute'];
        }

        if (isset($map['field3'])) {
            $model->field3 = $map['field3'];
        }

        if (isset($map['fsmId'])) {
            $model->fsmId = $map['fsmId'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
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
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taskNodes'])) {
            if (!empty($map['taskNodes'])) {
                $model->taskNodes = [];
                $n1 = 0;
                foreach ($map['taskNodes'] as $item1) {
                    $model->taskNodes[$n1] = taskNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
