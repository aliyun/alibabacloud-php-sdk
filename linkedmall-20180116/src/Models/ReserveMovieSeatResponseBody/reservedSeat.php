<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReserveMovieSeatResponseBody;

use AlibabaCloud\Tea\Model;

class reservedSeat extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $reservedTime;

    /**
     * @var int
     */
    public $defaultLockSecond;

    /**
     * @var string
     */
    public $applyKey;
    protected $_name = [
        'status'            => 'Status',
        'reservedTime'      => 'ReservedTime',
        'defaultLockSecond' => 'DefaultLockSecond',
        'applyKey'          => 'ApplyKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reservedTime) {
            $res['ReservedTime'] = $this->reservedTime;
        }
        if (null !== $this->defaultLockSecond) {
            $res['DefaultLockSecond'] = $this->defaultLockSecond;
        }
        if (null !== $this->applyKey) {
            $res['ApplyKey'] = $this->applyKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedSeat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ReservedTime'])) {
            $model->reservedTime = $map['ReservedTime'];
        }
        if (isset($map['DefaultLockSecond'])) {
            $model->defaultLockSecond = $map['DefaultLockSecond'];
        }
        if (isset($map['ApplyKey'])) {
            $model->applyKey = $map['ApplyKey'];
        }

        return $model;
    }
}
