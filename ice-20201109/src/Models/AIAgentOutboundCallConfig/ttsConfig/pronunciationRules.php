<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig\ttsConfig;

use AlibabaCloud\Dara\Model;

class pronunciationRules extends Model
{
    /**
     * @var string
     */
    public $pronunciation;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $word;
    protected $_name = [
        'pronunciation' => 'Pronunciation',
        'type' => 'Type',
        'word' => 'Word',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pronunciation) {
            $res['Pronunciation'] = $this->pronunciation;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->word) {
            $res['Word'] = $this->word;
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
        if (isset($map['Pronunciation'])) {
            $model->pronunciation = $map['Pronunciation'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Word'])) {
            $model->word = $map['Word'];
        }

        return $model;
    }
}
