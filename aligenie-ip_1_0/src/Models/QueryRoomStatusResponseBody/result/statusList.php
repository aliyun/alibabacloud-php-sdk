<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryRoomStatusResponseBody\result;

use AlibabaCloud\Dara\Model;

class statusList extends Model
{
    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $statusValue;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'statusName' => 'StatusName',
        'statusValue' => 'StatusValue',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }

        if (null !== $this->statusValue) {
            $res['StatusValue'] = $this->statusValue;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }

        if (isset($map['StatusValue'])) {
            $model->statusValue = $map['StatusValue'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
