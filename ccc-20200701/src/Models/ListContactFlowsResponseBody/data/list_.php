<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $editor;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $numberList;

    /**
     * @var bool
     */
    public $published;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'createdTime' => 'CreatedTime',
        'definition' => 'Definition',
        'description' => 'Description',
        'draftId' => 'DraftId',
        'editor' => 'Editor',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'numberList' => 'NumberList',
        'published' => 'Published',
        'type' => 'Type',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        if (\is_array($this->numberList)) {
            Model::validateArray($this->numberList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }

        if (null !== $this->editor) {
            $res['Editor'] = $this->editor;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->numberList) {
            if (\is_array($this->numberList)) {
                $res['NumberList'] = [];
                $n1 = 0;
                foreach ($this->numberList as $item1) {
                    $res['NumberList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }

        if (isset($map['Editor'])) {
            $model->editor = $map['Editor'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NumberList'])) {
            if (!empty($map['NumberList'])) {
                $model->numberList = [];
                $n1 = 0;
                foreach ($map['NumberList'] as $item1) {
                    $model->numberList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
