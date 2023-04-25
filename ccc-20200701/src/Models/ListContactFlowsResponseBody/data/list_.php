<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListContactFlowsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 78128960-bb00-4ddc-8e82-923a8c5bd22d
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example 2021-03-05 17:35:45.0
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $definition;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $description;

    /**
     * @example db07c0bb-6b1f-47d2-b37e-2451c617562d
     *
     * @var string
     */
    public $draftId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $editor;

    /**
     * @example ccc-test
     *
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
     * @example true
     *
     * @var bool
     */
    public $published;

    /**
     * @example MAIN_FLOW
     *
     * @var string
     */
    public $type;

    /**
     * @example 2021-03-08 15:34:49.0
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'createdTime'   => 'CreatedTime',
        'definition'    => 'Definition',
        'description'   => 'Description',
        'draftId'       => 'DraftId',
        'editor'        => 'Editor',
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'numberList'    => 'NumberList',
        'published'     => 'Published',
        'type'          => 'Type',
        'updatedTime'   => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['NumberList'] = $this->numberList;
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
                $model->numberList = $map['NumberList'];
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
