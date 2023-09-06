<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponseBody\result;

use AlibabaCloud\Tea\Model;

class roomLabels extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $labelId;

    /**
     * @example 电视
     *
     * @var string
     */
    public $labelName;
    protected $_name = [
        'labelId'   => 'LabelId',
        'labelName' => 'LabelName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelId) {
            $res['LabelId'] = $this->labelId;
        }
        if (null !== $this->labelName) {
            $res['LabelName'] = $this->labelName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomLabels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelId'])) {
            $model->labelId = $map['LabelId'];
        }
        if (isset($map['LabelName'])) {
            $model->labelName = $map['LabelName'];
        }

        return $model;
    }
}
