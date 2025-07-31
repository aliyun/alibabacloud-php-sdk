<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class LlmStreamChatRequest extends Model
{
    /**
     * @var mixed
     */
    public $messages;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $temperature;

    /**
     * @example 0.5
     *
     * @var float
     */
    public $topP;
    protected $_name = [
        'messages' => 'Messages',
        'temperature' => 'Temperature',
        'topP' => 'TopP',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return LlmStreamChatRequest
     */
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
