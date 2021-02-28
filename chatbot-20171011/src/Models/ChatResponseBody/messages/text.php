<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\ChatResponseBody\messages\text\slots;
use AlibabaCloud\Tea\Model;

class text extends Model
{
    /**
     * @var string
     */
    public $hitStatement;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @var string
     */
    public $articleTitle;

    /**
     * @var string
     */
    public $answerSource;

    /**
     * @var slots[]
     */
    public $slots;

    /**
     * @var string
     */
    public $intentName;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var mixed[]
     */
    public $externalFlags;

    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @var string
     */
    public $userDefinedChatTitle;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'hitStatement'         => 'HitStatement',
        'dialogName'           => 'DialogName',
        'articleTitle'         => 'ArticleTitle',
        'answerSource'         => 'AnswerSource',
        'slots'                => 'Slots',
        'intentName'           => 'IntentName',
        'metaData'             => 'MetaData',
        'nodeName'             => 'NodeName',
        'externalFlags'        => 'ExternalFlags',
        'ext'                  => 'Ext',
        'userDefinedChatTitle' => 'UserDefinedChatTitle',
        'content'              => 'Content',
        'nodeId'               => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitStatement) {
            $res['HitStatement'] = $this->hitStatement;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }
        if (null !== $this->articleTitle) {
            $res['ArticleTitle'] = $this->articleTitle;
        }
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
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
        if (null !== $this->intentName) {
            $res['IntentName'] = $this->intentName;
        }
        if (null !== $this->metaData) {
            $res['MetaData'] = $this->metaData;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->externalFlags) {
            $res['ExternalFlags'] = $this->externalFlags;
        }
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->userDefinedChatTitle) {
            $res['UserDefinedChatTitle'] = $this->userDefinedChatTitle;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['HitStatement'])) {
            $model->hitStatement = $map['HitStatement'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }
        if (isset($map['ArticleTitle'])) {
            $model->articleTitle = $map['ArticleTitle'];
        }
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
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
        if (isset($map['IntentName'])) {
            $model->intentName = $map['IntentName'];
        }
        if (isset($map['MetaData'])) {
            $model->metaData = $map['MetaData'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ExternalFlags'])) {
            $model->externalFlags = $map['ExternalFlags'];
        }
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['UserDefinedChatTitle'])) {
            $model->userDefinedChatTitle = $map['UserDefinedChatTitle'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
