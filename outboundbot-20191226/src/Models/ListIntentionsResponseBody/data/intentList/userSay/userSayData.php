<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\userSay;

use AlibabaCloud\Tea\Model;

class userSayData extends Model
{
    /**
     * @example 9ec31b50-32b8-11eb-9478-19d2d885afdb
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return userSayData
     */
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
