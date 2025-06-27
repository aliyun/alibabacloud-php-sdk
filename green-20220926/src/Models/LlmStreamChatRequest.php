<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class LlmStreamChatRequest extends Model
{
    /**
     * @var mixed
     */
    public $messages;

    /**
     * @var float
     */
    public $temperature;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'messages' => 'Messages',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messages) {
            $res['Messages'] = $this->messages;
        }

        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }

        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
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
        if (isset($map['Messages'])) {
            $model->messages = $map['Messages'];
        }

        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }

        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }

        return $model;
    }
}
