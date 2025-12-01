<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\autoSpeechConfig\userIdle;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var float
     */
    public $probability;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'probability' => 'Probability',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->probability) {
            $res['Probability'] = $this->probability;
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
        if (isset($map['Probability'])) {
            $model->probability = $map['Probability'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
