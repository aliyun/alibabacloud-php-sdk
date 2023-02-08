<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingRequest;

use AlibabaCloud\Tea\Model;

class verifyad extends Model
{
    /**
     * @example 44
     *
     * @var int
     */
    public $id;

    /**
     * @example 4534523
     *
     * @var int
     */
    public $seat;
    protected $_name = [
        'id'   => 'Id',
        'seat' => 'Seat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->seat) {
            $res['Seat'] = $this->seat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return verifyad
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Seat'])) {
            $model->seat = $map['Seat'];
        }

        return $model;
    }
}
