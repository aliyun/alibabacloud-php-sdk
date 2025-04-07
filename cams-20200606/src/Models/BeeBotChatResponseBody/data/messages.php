<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data;

use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\knowledge;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\recommends;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotChatResponseBody\data\messages\text;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @description When AnswerType is Recommended, this field indicates the source of the recommended answer.
     *
     * @example KNOWLEDGE
     *
     * @var string
     */
    public $answerSource;

    /**
     * @description The type of this message.
     *
     * @example Text
     *
     * @var string
     */
    public $answerType;

    /**
     * @description When AnswerType is Knowledge, this field contains the Knowledge object returned by the robot.
     *
     * @var knowledge
     */
    public $knowledge;

    /**
     * @description When AnswerType is Recommended, this field contains a list of Recommendations returned by the robot.
     *
     * @var recommends[]
     */
    public $recommends;

    /**
     * @description When AnswerType is Text, this field contains the Text object returned by the robot.
     *
     * @var text
     */
    public $text;
    protected $_name = [
        'answerSource' => 'AnswerSource',
        'answerType' => 'AnswerType',
        'knowledge' => 'Knowledge',
        'recommends' => 'Recommends',
        'text' => 'Text',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerSource) {
            $res['AnswerSource'] = $this->answerSource;
        }
        if (null !== $this->answerType) {
            $res['AnswerType'] = $this->answerType;
        }
        if (null !== $this->knowledge) {
            $res['Knowledge'] = null !== $this->knowledge ? $this->knowledge->toMap() : null;
        }
        if (null !== $this->recommends) {
            $res['Recommends'] = [];
            if (null !== $this->recommends && \is_array($this->recommends)) {
                $n = 0;
                foreach ($this->recommends as $item) {
                    $res['Recommends'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->text) {
            $res['Text'] = null !== $this->text ? $this->text->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnswerSource'])) {
            $model->answerSource = $map['AnswerSource'];
        }
        if (isset($map['AnswerType'])) {
            $model->answerType = $map['AnswerType'];
        }
        if (isset($map['Knowledge'])) {
            $model->knowledge = knowledge::fromMap($map['Knowledge']);
        }
        if (isset($map['Recommends'])) {
            if (!empty($map['Recommends'])) {
                $model->recommends = [];
                $n = 0;
                foreach ($map['Recommends'] as $item) {
                    $model->recommends[$n++] = null !== $item ? recommends::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Text'])) {
            $model->text = text::fromMap($map['Text']);
        }

        return $model;
    }
}
