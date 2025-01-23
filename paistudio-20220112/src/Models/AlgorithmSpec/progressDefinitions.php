<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\progressDefinitions\overallProgress;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\AlgorithmSpec\progressDefinitions\remainingTime;

class progressDefinitions extends Model
{
    /**
     * @var overallProgress
     */
    public $overallProgress;
    /**
     * @var remainingTime
     */
    public $remainingTime;
    protected $_name = [
        'overallProgress' => 'OverallProgress',
        'remainingTime'   => 'RemainingTime',
    ];

    public function validate()
    {
        if (null !== $this->overallProgress) {
            $this->overallProgress->validate();
        }
        if (null !== $this->remainingTime) {
            $this->remainingTime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overallProgress) {
            $res['OverallProgress'] = null !== $this->overallProgress ? $this->overallProgress->toArray($noStream) : $this->overallProgress;
        }

        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = null !== $this->remainingTime ? $this->remainingTime->toArray($noStream) : $this->remainingTime;
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
        if (isset($map['OverallProgress'])) {
            $model->overallProgress = overallProgress::fromMap($map['OverallProgress']);
        }

        if (isset($map['RemainingTime'])) {
            $model->remainingTime = remainingTime::fromMap($map['RemainingTime']);
        }

        return $model;
    }
}
