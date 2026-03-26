<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;

class CreateMemoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $autoUpdate;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $messagesJson;

    /**
     * @var string
     */
    public $metaDataShrink;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $userDefinedId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'autoUpdate' => 'AutoUpdate',
        'content' => 'Content',
        'expirationTime' => 'ExpirationTime',
        'messagesJson' => 'MessagesJson',
        'metaDataShrink' => 'MetaData',
        'projectId' => 'ProjectId',
        'prompt' => 'Prompt',
        'userDefinedId' => 'UserDefinedId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->autoUpdate) {
            $res['AutoUpdate'] = $this->autoUpdate;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->messagesJson) {
            $res['MessagesJson'] = $this->messagesJson;
        }

        if (null !== $this->metaDataShrink) {
            $res['MetaData'] = $this->metaDataShrink;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->userDefinedId) {
            $res['UserDefinedId'] = $this->userDefinedId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AutoUpdate'])) {
            $model->autoUpdate = $map['AutoUpdate'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['MessagesJson'])) {
            $model->messagesJson = $map['MessagesJson'];
        }

        if (isset($map['MetaData'])) {
            $model->metaDataShrink = $map['MetaData'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['UserDefinedId'])) {
            $model->userDefinedId = $map['UserDefinedId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
