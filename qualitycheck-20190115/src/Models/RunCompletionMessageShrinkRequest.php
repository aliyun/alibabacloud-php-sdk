<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class RunCompletionMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $messagesShrink;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'messagesShrink' => 'Messages',
        'modelCode' => 'ModelCode',
        'stream' => 'Stream',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messagesShrink) {
            $res['Messages'] = $this->messagesShrink;
        }

        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
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
            $model->messagesShrink = $map['Messages'];
        }

        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
