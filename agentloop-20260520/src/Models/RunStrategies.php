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

    /**
     * @var SelectedDataStrategy
     */
    public $selectedData;
    protected $_name = [
        'backfill' => 'backfill',
        'continuous' => 'continuous',
        'selectedData' => 'selectedData',
    ];

    public function validate()
    {
        if (null !== $this->backfill) {
            $this->backfill->validate();
        }
        if (null !== $this->continuous) {
            $this->continuous->validate();
        }
        if (null !== $this->selectedData) {
            $this->selectedData->validate();
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

        if (null !== $this->selectedData) {
            $res['selectedData'] = null !== $this->selectedData ? $this->selectedData->toArray($noStream) : $this->selectedData;
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

        if (isset($map['selectedData'])) {
            $model->selectedData = SelectedDataStrategy::fromMap($map['selectedData']);
        }

        return $model;
    }
}
