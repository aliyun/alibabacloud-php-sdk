<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\text\slots;

class text extends Model
{
    /**
     * @var string
     */
    public $answerSource;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $dialogName;

    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @var mixed[]
     */
    public $externalFlags;

    /**
     * @var string
     */
    public $hitStatement;

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
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var slots[]
     */
    public $slots;

    /**
     * @var string
     */
    public $userDefinedChatTitle;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'content' => 'Content',
        'contentType' => 'ContentType',
        'dialogName' => 'DialogName',
        'ext' => 'Ext',
        'externalFlags' => 'ExternalFlags',
        'hitStatement' => 'HitStatement',
        'intentName' => 'IntentName',
        'metaData' => 'MetaData',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'slots' => 'Slots',
        'userDefinedChatTitle' => 'UserDefinedChatTitle',
    ];

    public function validate()
    {
        if (\is_array($this->ext)) {
            Model::validateArray($this->ext);
        }
        if (\is_array($this->externalFlags)) {
            Model::validateArray($this->externalFlags);
        }
        if (\is_array($this->slots)) {
            Model::validateArray($this->slots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ext)) {
                $res['Ext'] = [];
                foreach ($this->ext as $key1 => $value1) {
                    $res['Ext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->externalFlags) {
            if (\is_array($this->externalFlags)) {
                $res['ExternalFlags'] = [];
                foreach ($this->externalFlags as $key1 => $value1) {
                    $res['ExternalFlags'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->slots)) {
                $res['Slots'] = [];
                $n1 = 0;
                foreach ($this->slots as $item1) {
                    $res['Slots'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userDefinedChatTitle) {
            $res['UserDefinedChatTitle'] = $this->userDefinedChatTitle;
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
            if (!empty($map['Ext'])) {
                $model->ext = [];
                foreach ($map['Ext'] as $key1 => $value1) {
                    $model->ext[$key1] = $value1;
                }
            }
        }

        if (isset($map['ExternalFlags'])) {
            if (!empty($map['ExternalFlags'])) {
                $model->externalFlags = [];
                foreach ($map['ExternalFlags'] as $key1 => $value1) {
                    $model->externalFlags[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Slots'] as $item1) {
                    $model->slots[$n1++] = slots::fromMap($item1);
                }
            }
        }

        if (isset($map['UserDefinedChatTitle'])) {
            $model->userDefinedChatTitle = $map['UserDefinedChatTitle'];
        }

        return $model;
    }
}
