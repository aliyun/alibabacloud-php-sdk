<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 22318
     *
     * @var int
     */
    public $laneId;
    protected $_name = [
        'laneId' => 'LaneId',
    ];

    public function validate() {}

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
     * @return data
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
