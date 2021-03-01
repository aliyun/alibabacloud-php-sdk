<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSwimmingLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }

        return $model;
    }
}
