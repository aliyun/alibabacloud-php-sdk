<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryAttackCountResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $eventCount;

    /**
     * @var string
     */
    public $tacticId;

    /**
     * @var string
     */
    public $tacticType;
    protected $_name = [
        'eventCount' => 'EventCount',
        'tacticId' => 'TacticId',
        'tacticType' => 'TacticType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }

        if (null !== $this->tacticId) {
            $res['TacticId'] = $this->tacticId;
        }

        if (null !== $this->tacticType) {
            $res['TacticType'] = $this->tacticType;
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
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }

        if (isset($map['TacticId'])) {
            $model->tacticId = $map['TacticId'];
        }

        if (isset($map['TacticType'])) {
            $model->tacticType = $map['TacticType'];
        }

        return $model;
    }
}
