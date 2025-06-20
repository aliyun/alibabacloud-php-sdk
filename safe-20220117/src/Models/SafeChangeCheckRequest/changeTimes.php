<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\SafeChangeCheckRequest;

use AlibabaCloud\Dara\Model;

class changeTimes extends Model
{
    /**
     * @var int
     */
    public $changeEndTime;

    /**
     * @var int
     */
    public $changeStartTime;
    protected $_name = [
        'changeEndTime' => 'ChangeEndTime',
        'changeStartTime' => 'ChangeStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeEndTime) {
            $res['ChangeEndTime'] = $this->changeEndTime;
        }

        if (null !== $this->changeStartTime) {
            $res['ChangeStartTime'] = $this->changeStartTime;
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
        if (isset($map['ChangeEndTime'])) {
            $model->changeEndTime = $map['ChangeEndTime'];
        }

        if (isset($map['ChangeStartTime'])) {
            $model->changeStartTime = $map['ChangeStartTime'];
        }

        return $model;
    }
}
