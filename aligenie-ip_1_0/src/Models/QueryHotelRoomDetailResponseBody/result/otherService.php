<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class otherService extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $openCall;

    /**
     * @example 0
     *
     * @var int
     */
    public $unhandleTickets;
    protected $_name = [
        'openCall'        => 'OpenCall',
        'unhandleTickets' => 'UnhandleTickets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openCall) {
            $res['OpenCall'] = $this->openCall;
        }
        if (null !== $this->unhandleTickets) {
            $res['UnhandleTickets'] = $this->unhandleTickets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return otherService
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenCall'])) {
            $model->openCall = $map['OpenCall'];
        }
        if (isset($map['UnhandleTickets'])) {
            $model->unhandleTickets = $map['UnhandleTickets'];
        }

        return $model;
    }
}
