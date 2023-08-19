<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryAttackCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of times that the alert is triggered.
     *
     * @example 28
     *
     * @var int
     */
    public $eventCount;

    /**
     * @description The ID of the ATT\&CK phase.
     *
     * @example TA0043
     *
     * @var string
     */
    public $tacticId;

    /**
     * @description The type of the ATT\&CK phase.
     *
     * @example Data collection
     *
     * @var string
     */
    public $tacticType;
    protected $_name = [
        'eventCount' => 'EventCount',
        'tacticId'   => 'TacticId',
        'tacticType' => 'TacticType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
