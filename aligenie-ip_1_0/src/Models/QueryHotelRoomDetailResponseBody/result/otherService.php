<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\QueryHotelRoomDetailResponseBody\result;

use AlibabaCloud\Dara\Model;

class otherService extends Model
{
    /**
     * @var bool
     */
    public $openCall;

    /**
     * @var int
     */
    public $unhandleTickets;
    protected $_name = [
        'openCall' => 'OpenCall',
        'unhandleTickets' => 'UnhandleTickets',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
