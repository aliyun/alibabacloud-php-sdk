<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ScheduledPlanExecutedStatus extends Model
{
    /**
     * @var string
     */
    public $restartType;

    /**
     * @var string
     */
    public $statusState;
    protected $_name = [
        'restartType' => 'restartType',
        'statusState' => 'statusState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->restartType) {
            $res['restartType'] = $this->restartType;
        }

        if (null !== $this->statusState) {
            $res['statusState'] = $this->statusState;
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
        if (isset($map['restartType'])) {
            $model->restartType = $map['restartType'];
        }

        if (isset($map['statusState'])) {
            $model->statusState = $map['statusState'];
        }

        return $model;
    }
}
