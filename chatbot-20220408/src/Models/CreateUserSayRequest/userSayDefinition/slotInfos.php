<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateUserSayRequest\userSayDefinition;

use AlibabaCloud\Dara\Model;

class slotInfos extends Model
{
    /**
     * @var int
     */
    public $endIndex;

    /**
     * @var string
     */
    public $slotId;

    /**
     * @var int
     */
    public $startIndex;
    protected $_name = [
        'endIndex' => 'EndIndex',
        'slotId' => 'SlotId',
        'startIndex' => 'StartIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endIndex) {
            $res['EndIndex'] = $this->endIndex;
        }

        if (null !== $this->slotId) {
            $res['SlotId'] = $this->slotId;
        }

        if (null !== $this->startIndex) {
            $res['StartIndex'] = $this->startIndex;
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
        if (isset($map['EndIndex'])) {
            $model->endIndex = $map['EndIndex'];
        }

        if (isset($map['SlotId'])) {
            $model->slotId = $map['SlotId'];
        }

        if (isset($map['StartIndex'])) {
            $model->startIndex = $map['StartIndex'];
        }

        return $model;
    }
}
