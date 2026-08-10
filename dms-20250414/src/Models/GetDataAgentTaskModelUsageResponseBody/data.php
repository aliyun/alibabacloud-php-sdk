<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetDataAgentTaskModelUsageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $peakTpm;

    /**
     * @var int
     */
    public $totalCallCount;

    /**
     * @var int
     */
    public $totalTokenConsumed;

    /**
     * @var int
     */
    public $usedModels;
    protected $_name = [
        'peakTpm' => 'peakTpm',
        'totalCallCount' => 'totalCallCount',
        'totalTokenConsumed' => 'totalTokenConsumed',
        'usedModels' => 'usedModels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->peakTpm) {
            $res['peakTpm'] = $this->peakTpm;
        }

        if (null !== $this->totalCallCount) {
            $res['totalCallCount'] = $this->totalCallCount;
        }

        if (null !== $this->totalTokenConsumed) {
            $res['totalTokenConsumed'] = $this->totalTokenConsumed;
        }

        if (null !== $this->usedModels) {
            $res['usedModels'] = $this->usedModels;
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
        if (isset($map['peakTpm'])) {
            $model->peakTpm = $map['peakTpm'];
        }

        if (isset($map['totalCallCount'])) {
            $model->totalCallCount = $map['totalCallCount'];
        }

        if (isset($map['totalTokenConsumed'])) {
            $model->totalTokenConsumed = $map['totalTokenConsumed'];
        }

        if (isset($map['usedModels'])) {
            $model->usedModels = $map['usedModels'];
        }

        return $model;
    }
}
