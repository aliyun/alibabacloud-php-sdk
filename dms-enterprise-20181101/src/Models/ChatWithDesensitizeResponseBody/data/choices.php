<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChatWithDesensitizeResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChatWithDesensitizeResponseBody\data\choices\message;

class choices extends Model
{
    /**
     * @var string
     */
    public $finishReason;

    /**
     * @var mixed[]
     */
    public $logprobs;

    /**
     * @var message
     */
    public $message;
    protected $_name = [
        'finishReason' => 'FinishReason',
        'logprobs' => 'Logprobs',
        'message' => 'Message',
    ];

    public function validate()
    {
        if (\is_array($this->logprobs)) {
            Model::validateArray($this->logprobs);
        }
        if (null !== $this->message) {
            $this->message->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishReason) {
            $res['FinishReason'] = $this->finishReason;
        }

        if (null !== $this->logprobs) {
            if (\is_array($this->logprobs)) {
                $res['Logprobs'] = [];
                foreach ($this->logprobs as $key1 => $value1) {
                    $res['Logprobs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = null !== $this->message ? $this->message->toArray($noStream) : $this->message;
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
        if (isset($map['FinishReason'])) {
            $model->finishReason = $map['FinishReason'];
        }

        if (isset($map['Logprobs'])) {
            if (!empty($map['Logprobs'])) {
                $model->logprobs = [];
                foreach ($map['Logprobs'] as $key1 => $value1) {
                    $model->logprobs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = message::fromMap($map['Message']);
        }

        return $model;
    }
}
