<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressTrainer extends Model
{
    /**
     * @var RLProgressMicro
     */
    public $micro;

    /**
     * @var int
     */
    public $miniIdx;

    /**
     * @var int
     */
    public $numMinibatches;

    /**
     * @var RLProgressSync
     */
    public $sync;
    protected $_name = [
        'micro' => 'Micro',
        'miniIdx' => 'MiniIdx',
        'numMinibatches' => 'NumMinibatches',
        'sync' => 'Sync',
    ];

    public function validate()
    {
        if (null !== $this->micro) {
            $this->micro->validate();
        }
        if (null !== $this->sync) {
            $this->sync->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->micro) {
            $res['Micro'] = null !== $this->micro ? $this->micro->toArray($noStream) : $this->micro;
        }

        if (null !== $this->miniIdx) {
            $res['MiniIdx'] = $this->miniIdx;
        }

        if (null !== $this->numMinibatches) {
            $res['NumMinibatches'] = $this->numMinibatches;
        }

        if (null !== $this->sync) {
            $res['Sync'] = null !== $this->sync ? $this->sync->toArray($noStream) : $this->sync;
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
        if (isset($map['Micro'])) {
            $model->micro = RLProgressMicro::fromMap($map['Micro']);
        }

        if (isset($map['MiniIdx'])) {
            $model->miniIdx = $map['MiniIdx'];
        }

        if (isset($map['NumMinibatches'])) {
            $model->numMinibatches = $map['NumMinibatches'];
        }

        if (isset($map['Sync'])) {
            $model->sync = RLProgressSync::fromMap($map['Sync']);
        }

        return $model;
    }
}
