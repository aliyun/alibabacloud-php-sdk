<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListGeneratedContentsResponseBody\data\fileAttr;

class data extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentDomain;

    /**
     * @var string
     */
    public $contentText;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var fileAttr
     */
    public $fileAttr;

    /**
     * @var string
     */
    public $fileKey;

    /**
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
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $updateUser;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'content' => 'Content',
        'contentDomain' => 'ContentDomain',
        'contentText' => 'ContentText',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'deviceId' => 'DeviceId',
        'fileAttr' => 'FileAttr',
        'fileKey' => 'FileKey',
        'id' => 'Id',
        'keywordList' => 'KeywordList',
        'keywords' => 'Keywords',
        'prompt' => 'Prompt',
        'taskId' => 'TaskId',
        'title' => 'Title',
        'updateTime' => 'UpdateTime',
        'updateUser' => 'UpdateUser',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (null !== $this->fileAttr) {
            $this->fileAttr->validate();
        }
        if (\is_array($this->keywordList)) {
            Model::validateArray($this->keywordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->fileAttr) {
            $res['FileAttr'] = null !== $this->fileAttr ? $this->fileAttr->toArray($noStream) : $this->fileAttr;
        }

        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->keywordList) {
            if (\is_array($this->keywordList)) {
                $res['KeywordList'] = [];
                $n1 = 0;
                foreach ($this->keywordList as $item1) {
                    $res['KeywordList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['FileAttr'])) {
            $model->fileAttr = fileAttr::fromMap($map['FileAttr']);
        }

        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['KeywordList'])) {
            if (!empty($map['KeywordList'])) {
                $model->keywordList = [];
                $n1 = 0;
                foreach ($map['KeywordList'] as $item1) {
                    $model->keywordList[$n1++] = $item1;
                }
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
