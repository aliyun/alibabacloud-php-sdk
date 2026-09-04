<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressRollout extends Model
{
    /**
     * @var int
     */
    public $finished;

    /**
     * @var RLProgressProcessed
     */
    public $processed;

    /**
     * @var float
     */
    public $ratePerMin;
    protected $_name = [
        'finished' => 'Finished',
        'processed' => 'Processed',
        'ratePerMin' => 'RatePerMin',
    ];

    public function validate()
    {
        if (null !== $this->processed) {
            $this->processed->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }

        if (null !== $this->processed) {
            $res['Processed'] = null !== $this->processed ? $this->processed->toArray($noStream) : $this->processed;
        }

        if (null !== $this->ratePerMin) {
            $res['RatePerMin'] = $this->ratePerMin;
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
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        if (isset($map['Processed'])) {
            $model->processed = RLProgressProcessed::fromMap($map['Processed']);
        }

        if (isset($map['RatePerMin'])) {
            $model->ratePerMin = $map['RatePerMin'];
        }

        return $model;
    }
}
