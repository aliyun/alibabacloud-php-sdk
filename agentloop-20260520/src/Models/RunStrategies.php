<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class RunStrategies extends Model
{
    /**
     * @var BackfillStrategy
     */
    public $backfill;

    /**
     * @var ContinuousStrategy
     */
    public $continuous;
    protected $_name = [
        'backfill' => 'backfill',
        'continuous' => 'continuous',
    ];

    public function validate()
    {
        if (null !== $this->backfill) {
            $this->backfill->validate();
        }
        if (null !== $this->continuous) {
            $this->continuous->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backfill) {
            $res['backfill'] = null !== $this->backfill ? $this->backfill->toArray($noStream) : $this->backfill;
        }

        if (null !== $this->continuous) {
            $res['continuous'] = null !== $this->continuous ? $this->continuous->toArray($noStream) : $this->continuous;
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
        if (isset($map['backfill'])) {
            $model->backfill = BackfillStrategy::fromMap($map['backfill']);
        }

        if (isset($map['continuous'])) {
            $model->continuous = ContinuousStrategy::fromMap($map['continuous']);
        }

        return $model;
    }
}
