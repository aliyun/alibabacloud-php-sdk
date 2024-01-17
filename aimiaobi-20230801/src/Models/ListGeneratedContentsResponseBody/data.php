<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example media
     *
     * @var string
     */
    public $contentDomain;

    /**
     * @var string
     */
    public $contentText;

    /**
     * @example 2024-01-04 11:46:07
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 123
     *
     * @var string
     */
    public $createUser;

    /**
     * @example xxx
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $keywordList;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $title;

    /**
     * @example 2024-01-04 11:46:07
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1111
     *
     * @var string
     */
    public $updateUser;

    /**
     * @example xxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'content'       => 'Content',
        'contentDomain' => 'ContentDomain',
        'contentText'   => 'ContentText',
        'createTime'    => 'CreateTime',
        'createUser'    => 'CreateUser',
        'deviceId'      => 'DeviceId',
        'id'            => 'Id',
        'keywordList'   => 'KeywordList',
        'keywords'      => 'Keywords',
        'prompt'        => 'Prompt',
        'taskId'        => 'TaskId',
        'title'         => 'Title',
        'updateTime'    => 'UpdateTime',
        'updateUser'    => 'UpdateUser',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentDomain) {
            $res['ContentDomain'] = $this->contentDomain;
        }
        if (null !== $this->contentText) {
            $res['ContentText'] = $this->contentText;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keywordList) {
            $res['KeywordList'] = $this->keywordList;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateUser) {
            $res['UpdateUser'] = $this->updateUser;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentDomain'])) {
            $model->contentDomain = $map['ContentDomain'];
        }
        if (isset($map['ContentText'])) {
            $model->contentText = $map['ContentText'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['KeywordList'])) {
            if (!empty($map['KeywordList'])) {
                $model->keywordList = $map['KeywordList'];
            }
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateUser'])) {
            $model->updateUser = $map['UpdateUser'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
