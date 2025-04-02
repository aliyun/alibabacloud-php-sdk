<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponseBody\result;

use AlibabaCloud\Dara\Model;

class roomLabels extends Model
{
    /**
     * @var int
     */
    public $labelId;

    /**
     * @var string
     */
    public $labelName;
    protected $_name = [
        'labelId' => 'LabelId',
        'labelName' => 'LabelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
