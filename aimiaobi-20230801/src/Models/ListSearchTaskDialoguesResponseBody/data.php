<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialoguesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dialogueType;

    /**
     * @var string
     */
    public $goodText;

    /**
     * @var string
     */
    public $originSessionId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $rating;

    /**
     * @var string
     */
    public $responseBodyStr;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dialogueType' => 'DialogueType',
        'goodText' => 'GoodText',
        'originSessionId' => 'OriginSessionId',
        'prompt' => 'Prompt',
        'rating' => 'Rating',
        'responseBodyStr' => 'ResponseBodyStr',
        'sessionId' => 'SessionId',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'text' => 'Text',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dialogueType) {
            $res['DialogueType'] = $this->dialogueType;
        }

        if (null !== $this->goodText) {
            $res['GoodText'] = $this->goodText;
        }

        if (null !== $this->originSessionId) {
            $res['OriginSessionId'] = $this->originSessionId;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }

        if (null !== $this->responseBodyStr) {
            $res['ResponseBodyStr'] = $this->responseBodyStr;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DialogueType'])) {
            $model->dialogueType = $map['DialogueType'];
        }

        if (isset($map['GoodText'])) {
            $model->goodText = $map['GoodText'];
        }

        if (isset($map['OriginSessionId'])) {
            $model->originSessionId = $map['OriginSessionId'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }

        if (isset($map['ResponseBodyStr'])) {
            $model->responseBodyStr = $map['ResponseBodyStr'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
