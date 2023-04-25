<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetContactFlowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 274601be-a6d5-4429-bcef-32b51d031c6e
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example 2021-07-14 10:48:43.0
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
     * @example 566399d7-5558-447c-a72f-9be2768b6a82
     *
     * @var string
     */
    public $draftId;

    /**
     * @example editor-xxx
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
     * @example False
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
     * @example 2021-07-14 10:48:43.0
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
     * @return data
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
