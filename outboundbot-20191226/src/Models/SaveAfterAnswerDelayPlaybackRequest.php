<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class SaveAfterAnswerDelayPlaybackRequest extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $afterAnswerDelayPlayback;

    /**
     * @example 980116ec-2d3d-4747-8059-dc25e7af8501
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
        'afterAnswerDelayPlayback' => 'AfterAnswerDelayPlayback',
        'entryId'                  => 'EntryId',
        'strategyLevel'            => 'StrategyLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterAnswerDelayPlayback) {
            $res['AfterAnswerDelayPlayback'] = $this->afterAnswerDelayPlayback;
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
     * @return SaveAfterAnswerDelayPlaybackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterAnswerDelayPlayback'])) {
            $model->afterAnswerDelayPlayback = $map['AfterAnswerDelayPlayback'];
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
