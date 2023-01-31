<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SaveEffectiveDaysRequest extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $effectiveDays;

    /**
     * @example e90b5b8e-c8b4-4182-b28d-a5aa81685e49
     *
     * @var string
     */
    public $entryId;

    /**
     * @example 2
     *
     * @var int
     */
    public $strategyLevel;
    protected $_name = [
        'effectiveDays' => 'EffectiveDays',
        'entryId'       => 'EntryId',
        'strategyLevel' => 'StrategyLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveDays) {
            $res['EffectiveDays'] = $this->effectiveDays;
        }
        if (null !== $this->entryId) {
            $res['EntryId'] = $this->entryId;
        }
        if (null !== $this->strategyLevel) {
            $res['StrategyLevel'] = $this->strategyLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveEffectiveDaysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveDays'])) {
            $model->effectiveDays = $map['EffectiveDays'];
        }
        if (isset($map['EntryId'])) {
            $model->entryId = $map['EntryId'];
        }
        if (isset($map['StrategyLevel'])) {
            $model->strategyLevel = $map['StrategyLevel'];
        }

        return $model;
    }
}
