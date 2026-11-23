<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\response;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\response\data\extraInfo;
use AlibabaCloud\SDK\QwenB2BChat\V20261121\Models\VoiceEvent\payload\output\response\data\messages;

class data extends Model
{
    /**
     * @var mixed
     */
    public $debug;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var extraInfo
     */
    public $extraInfo;
    protected $_name = [
        'debug' => 'debug',
        'messages' => 'messages',
        'extraInfo' => 'extraInfo',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->extraInfo) {
            $this->extraInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->debug) {
            $res['debug'] = $this->debug;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extraInfo) {
            $res['extraInfo'] = null !== $this->extraInfo ? $this->extraInfo->toArray($noStream) : $this->extraInfo;
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
        if (isset($map['debug'])) {
            $model->debug = $map['debug'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['extraInfo'])) {
            $model->extraInfo = extraInfo::fromMap($map['extraInfo']);
        }

        return $model;
    }
}
