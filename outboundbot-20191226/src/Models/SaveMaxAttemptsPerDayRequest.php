<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SaveMaxAttemptsPerDayRequest extends Model
{
    /**
     * @example c8bf820a-6a8a-47bc-99bf-97593df8faa8
     *
     * @var string
     */
    public $entryId;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxAttemptsPerDay;

    /**
     * @example 2
     *
     * @var int
     */
    public $strategyLevel;
    protected $_name = [
        'entryId'           => 'EntryId',
        'maxAttemptsPerDay' => 'MaxAttemptsPerDay',
        'strategyLevel'     => 'StrategyLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }
        if (null !== $this->maxAttemptsPerDay) {
            $res['MaxAttemptsPerDay'] = $this->maxAttemptsPerDay;
        }
        if (null !== $this->strategyLevel) {
            $res['StrategyLevel'] = $this->strategyLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveMaxAttemptsPerDayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }
        if (isset($map['MaxAttemptsPerDay'])) {
            $model->maxAttemptsPerDay = $map['MaxAttemptsPerDay'];
        }
        if (isset($map['StrategyLevel'])) {
            $model->strategyLevel = $map['StrategyLevel'];
        }

        return $model;
    }
}
