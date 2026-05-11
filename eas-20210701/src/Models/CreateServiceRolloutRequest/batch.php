<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceRolloutRequest;

use AlibabaCloud\Dara\Model;

class batch extends Model
{
    /**
     * @var string
     */
    public $batchSize;

    /**
     * @var string
     */
    public $interval;
    protected $_name = [
        'batchSize' => 'BatchSize',
        'interval' => 'Interval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchSize) {
            $res['BatchSize'] = $this->batchSize;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
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
        if (isset($map['BatchSize'])) {
            $model->batchSize = $map['BatchSize'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
