<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages;

use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\text\slots;
use AlibabaCloud\Tea\Model;

class text extends Model
{
    /**
     * @description The source of the answer.
     *
     * @example BotFramework
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description The content of the text message.
     *
     * @var string
     */
    public $content;

    /**
     * @description Indicates whether the answer is in plain text or rich text.
     *
     * @example PLAIN_TEXT
     *
     * @var string
     */
    public $contentType;

    /**
     * @description When the AnswerSource parameter is set to BotFramework, the value of this parameter is returned.
     *
     * @var string
     */
    public $dialogName;

    /**
     * @description The passthrough parameters are returned.
     *
     * @var mixed[]
     */
    public $ext;

    /**
     * @description When the AnswerSource parameter is set to BotFramework, the value of this parameter is returned.
     *
     * @var mixed[]
     */
    public $externalFlags;

    /**
     * @description The hit text.
     *
     * @var string
     */
    public $hitStatement;

    /**
     * @description When the AnswerSource parameter is set to BotFramework, the value of this parameter is returned.
     *
     * @var string
     */
    public $intentName;

    /**
     * @description The metadata.
     *
     * @var string
     */
    public $metaData;

    /**
     * @description When the AnswerSource parameter is set to BotFramework, the value of this parameter is returned.
     *
     * @example 1410-c7a72a78.__city
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description When the AnswerSource parameter is set to BotFramework, the value of this parameter is returned.
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The list of slots.
     *
     * @var slots[]
     */
    public $slots;

    /**
     * @description The title of the chitchat.
     *
     * @var string
     */
    public $userDefinedChatTitle;
    protected $_name = [
        'answerSource'         => 'AnswerSource',
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
