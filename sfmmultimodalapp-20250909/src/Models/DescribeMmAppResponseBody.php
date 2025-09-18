<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody\conversationConfig;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody\modelConfig;

class DescribeMmAppResponseBody extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var conversationConfig
     */
    public $conversationConfig;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var modelConfig
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $publishVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'conversationConfig' => 'ConversationConfig',
        'createUserId' => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'modelConfig' => 'ModelConfig',
        'modifyUserId' => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'prompt' => 'Prompt',
        'publishVersion' => 'PublishVersion',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->conversationConfig) {
            $this->conversationConfig->validate();
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->conversationConfig) {
            $res['ConversationConfig'] = null !== $this->conversationConfig ? $this->conversationConfig->toArray($noStream) : $this->conversationConfig;
        }

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->modelConfig) {
            $res['ModelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->publishVersion) {
            $res['PublishVersion'] = $this->publishVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ConversationConfig'])) {
            $model->conversationConfig = conversationConfig::fromMap($map['ConversationConfig']);
        }

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ModelConfig'])) {
            $model->modelConfig = modelConfig::fromMap($map['ModelConfig']);
        }

        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['PublishVersion'])) {
            $model->publishVersion = $map['PublishVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
