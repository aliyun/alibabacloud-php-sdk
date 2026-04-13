<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAICopilot\V20250731\Models;

use AlibabaCloud\Dara\Model;

class CreateChatRequest extends Model
{
    /**
     * @var string
     */
    public $extraData;

    /**
     * @var mixed[]
     */
    public $payload;

    /**
     * @var ChatDetail
     */
    public $question;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'extraData' => 'ExtraData',
        'payload' => 'Payload',
        'question' => 'Question',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->payload)) {
            Model::validateArray($this->payload);
        }
        if (null !== $this->question) {
            $this->question->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }

        if (null !== $this->payload) {
            if (\is_array($this->payload)) {
                $res['Payload'] = [];
                foreach ($this->payload as $key1 => $value1) {
                    $res['Payload'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->question) {
            $res['Question'] = null !== $this->question ? $this->question->toArray($noStream) : $this->question;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        if (isset($map['Payload'])) {
            if (!empty($map['Payload'])) {
                $model->payload = [];
                foreach ($map['Payload'] as $key1 => $value1) {
                    $model->payload[$key1] = $value1;
                }
            }
        }

        if (isset($map['Question'])) {
            $model->question = ChatDetail::fromMap($map['Question']);
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
