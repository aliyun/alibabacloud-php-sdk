<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLJobCheckpointConfig extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $saveIntervalSteps;
    protected $_name = [
        'path' => 'Path',
        'saveIntervalSteps' => 'SaveIntervalSteps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->saveIntervalSteps) {
            $res['SaveIntervalSteps'] = $this->saveIntervalSteps;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['SaveIntervalSteps'])) {
            $model->saveIntervalSteps = $map['SaveIntervalSteps'];
        }

        return $model;
    }
}
