<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\userSay;

use AlibabaCloud\Dara\Model;

class userSayData extends Model
{
    /**
     * @var string
     */
    public $slotId;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'slotId' => 'SlotId',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slotId) {
            $res['SlotId'] = $this->slotId;
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
        if (isset($map['SlotId'])) {
            $model->slotId = $map['SlotId'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
