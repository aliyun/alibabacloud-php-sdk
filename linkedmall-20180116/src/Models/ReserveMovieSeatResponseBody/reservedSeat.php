<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReserveMovieSeatResponseBody;

use AlibabaCloud\Tea\Model;

class reservedSeat extends Model
{
    /**
     * @example ""
     *
     * @var string
     */
    public $applyKey;

    /**
     * @example 900
     *
     * @var int
     */
    public $defaultLockSecond;

    /**
     * @example 1649302236658
     *
     * @var int
     */
    public $reservedTime;

    /**
     * @example LOCKSUCCESS
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applyKey'          => 'ApplyKey',
        'defaultLockSecond' => 'DefaultLockSecond',
        'reservedTime'      => 'ReservedTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyKey) {
            $res['ApplyKey'] = $this->applyKey;
        }
        if (null !== $this->defaultLockSecond) {
            $res['DefaultLockSecond'] = $this->defaultLockSecond;
        }
        if (null !== $this->reservedTime) {
            $res['ReservedTime'] = $this->reservedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplyKey'])) {
            $model->applyKey = $map['ApplyKey'];
        }
        if (isset($map['DefaultLockSecond'])) {
            $model->defaultLockSecond = $map['DefaultLockSecond'];
        }
        if (isset($map['ReservedTime'])) {
            $model->reservedTime = $map['ReservedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
