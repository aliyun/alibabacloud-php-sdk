<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateUserSayRequest\userSayDefinition;

use AlibabaCloud\Tea\Model;

class slotInfos extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $endIndex;

    /**
     * @example 346ffg3q23dv
     *
     * @var string
     */
    public $slotId;

    /**
     * @example 1
     *
     * @var int
     */
    public $startIndex;
    protected $_name = [
        'endIndex'   => 'EndIndex',
        'slotId'     => 'SlotId',
        'startIndex' => 'StartIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return slotInfos
     */
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
