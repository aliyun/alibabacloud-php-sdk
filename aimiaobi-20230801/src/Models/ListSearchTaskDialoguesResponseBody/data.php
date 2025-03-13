<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListSearchTaskDialoguesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-11-25 13:33:01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 24
     *
     * @var int
     */
    public $dialogueType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $goodText;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $originSessionId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $prompt;

    /**
     * @example thumbsUp
     *
     * @var string
     */
    public $rating;

    /**
     * @example {}
     *
     * @var string
     */
    public $responseBodyStr;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $sessionId;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @example xxx
     *
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

    public function validate(): void {}

    public function toMap()
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
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
                $model->tags = $map['Tags'];
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
