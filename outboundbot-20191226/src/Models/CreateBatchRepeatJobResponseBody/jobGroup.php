<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchRepeatJobResponseBody;

use AlibabaCloud\Dara\Model;

class jobGroup extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $minConcurrency;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var int
     */
    public $ringingDuration;
    protected $_name = [
        'id' => 'Id',
        'minConcurrency' => 'MinConcurrency',
        'priority' => 'Priority',
        'ringingDuration' => 'RingingDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->minConcurrency) {
            $res['MinConcurrency'] = $this->minConcurrency;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->ringingDuration) {
            $res['RingingDuration'] = $this->ringingDuration;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MinConcurrency'])) {
            $model->minConcurrency = $map['MinConcurrency'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RingingDuration'])) {
            $model->ringingDuration = $map['RingingDuration'];
        }

        return $model;
    }
}
