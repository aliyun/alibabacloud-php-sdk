<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class SaveAfterAnswerDelayPlaybackRequest extends Model
{
    /**
     * @var int
     */
    public $afterAnswerDelayPlayback;

    /**
     * @var string
     */
    public $entryId;

    /**
     * @var int
     */
    public $strategyLevel;
    protected $_name = [
        'afterAnswerDelayPlayback' => 'AfterAnswerDelayPlayback',
        'entryId' => 'EntryId',
        'strategyLevel' => 'StrategyLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
