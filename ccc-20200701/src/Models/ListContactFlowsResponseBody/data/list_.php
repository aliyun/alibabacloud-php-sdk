<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $editor;

    /**
     * @var bool
     */
    public $published;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string[]
     */
    public $numberList;
    protected $_name = [
        'type'          => 'Type',
        'definition'    => 'Definition',
        'draftId'       => 'DraftId',
        'description'   => 'Description',
        'updatedTime'   => 'UpdatedTime',
        'editor'        => 'Editor',
        'published'     => 'Published',
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'contactFlowId' => 'ContactFlowId',
        'createdTime'   => 'CreatedTime',
        'numberList'    => 'NumberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->editor) {
            $res['Editor'] = $this->editor;
        }
        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['Editor'])) {
            $model->editor = $map['Editor'];
        }
        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['NumberList'])) {
            if (!empty($map['NumberList'])) {
                $model->numberList = $map['NumberList'];
            }
        }

        return $model;
    }
}
