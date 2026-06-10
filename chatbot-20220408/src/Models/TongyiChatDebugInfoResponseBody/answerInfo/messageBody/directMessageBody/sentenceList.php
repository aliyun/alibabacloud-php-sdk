<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\TongyiChatDebugInfoResponseBody\answerInfo\messageBody\directMessageBody;

use AlibabaCloud\Dara\Model;

class sentenceList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $referNumber;
    protected $_name = [
        'content' => 'Content',
        'referNumber' => 'ReferNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->referNumber) {
            $res['ReferNumber'] = $this->referNumber;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ReferNumber'])) {
            $model->referNumber = $map['ReferNumber'];
        }

        return $model;
    }
}
