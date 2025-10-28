<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DeleteSwimmingLaneRequest extends Model
{
    /**
     * @var int
     */
    public $laneId;
    protected $_name = [
        'laneId' => 'LaneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
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
        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }

        return $model;
    }
}
