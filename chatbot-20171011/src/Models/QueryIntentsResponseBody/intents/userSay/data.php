<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents\userSay;

use AlibabaCloud\Tea\Model;

class data extends Model
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
        'text'   => 'Text',
    ];

    public function validate()
    {
    }

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
     * @return data
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
