<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\ChatResponseBody\messages\text\slots;
use AlibabaCloud\Tea\Model;

class text extends Model
{
    /**
     * @description 区分答案类型
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description 当AnswerSource为MACHINE_READ时，此字段返回命中文章标题
     *
     * @var string
     */
    public $articleTitle;

    /**
     * @description 指令参数，如转人工指令的转人工技能组
     *
     * @var mixed[]
     */
    public $commands;

    /**
     * @description 文本消息的内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 纯文本/富文本答案的标示
     *
     * @var string
     */
    public $contentType;

    /**
     * @description 当AnswerSource为BotFramework时，此字段返回对话单元名称
     *
     * @var string
     */
    public $dialogName;

    /**
     * @description 此字段返回透传参数
     *
     * @var mixed[]
     */
    public $ext;

    /**
     * @description 当AnswerSource为BotFramework时，此字段返回透传参数
     *
     * @var mixed[]
     */
    public $externalFlags;

    /**
     * @description 命中语句
     *
     * @var string
     */
    public $hitStatement;

    /**
     * @description 当AnswerSource为BotFramework时，此字段返回意图名称
     *
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @description 当AnswerSource为BotFramework时，此字段返回节点Id
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description 当AnswerSource为BotFramework时，此字段返回节点名称
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description 分数
     *
     * @var float
     */
    public $score;

    /**
     * @description 当AnswerSource为BotFramework时，此字段返回专有名词列表
     *
     * @var slots[]
     */
    public $slots;

    /**
     * @description 自定义闲聊主题title
     *
     * @var string
     */
    public $userDefinedChatTitle;
    protected $_name = [
        'answerSource'         => 'AnswerSource',
        'articleTitle'         => 'ArticleTitle',
        'commands'             => 'Commands',
        'content'              => 'Content',
        'contentType'          => 'ContentType',
        'dialogName'           => 'DialogName',
        'ext'                  => 'Ext',
        'externalFlags'        => 'ExternalFlags',
        'hitStatement'         => 'HitStatement',
        'intentName'           => 'IntentName',
        'metaData'             => 'MetaData',
        'nodeId'               => 'NodeId',
        'nodeName'             => 'NodeName',
        'score'                => 'Score',
        'slots'                => 'Slots',
        'userDefinedChatTitle' => 'UserDefinedChatTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
        }
        if (null !== $this->articleTitle) {
            $res['ArticleTitle'] = $this->articleTitle;
        }
        if (null !== $this->commands) {
            $res['Commands'] = $this->commands;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->externalFlags) {
            $res['ExternalFlags'] = $this->externalFlags;
        }
        if (null !== $this->hitStatement) {
            $res['HitStatement'] = $this->hitStatement;
        }
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->metaData) {
            $res['MetaData'] = $this->metaData;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->slots) {
            $res['Slots'] = [];
            if (null !== $this->slots && \is_array($this->slots)) {
                $n = 0;
                foreach ($this->slots as $item) {
                    $res['Slots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userDefinedChatTitle) {
            $res['UserDefinedChatTitle'] = $this->userDefinedChatTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return text
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['ArticleTitle'])) {
            $model->articleTitle = $map['ArticleTitle'];
        }
        if (isset($map['Commands'])) {
            $model->commands = $map['Commands'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['ExternalFlags'])) {
            $model->externalFlags = $map['ExternalFlags'];
        }
        if (isset($map['HitStatement'])) {
            $model->hitStatement = $map['HitStatement'];
        }
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['MetaData'])) {
            $model->metaData = $map['MetaData'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Slots'])) {
            if (!empty($map['Slots'])) {
                $model->slots = [];
                $n            = 0;
                foreach ($map['Slots'] as $item) {
                    $model->slots[$n++] = null !== $item ? slots::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserDefinedChatTitle'])) {
            $model->userDefinedChatTitle = $map['UserDefinedChatTitle'];
        }

        return $model;
    }
}
