<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketQueryShelfResponseBody\data\shelves\tabs;

use AlibabaCloud\Dara\Model;

class cells extends Model
{
    /**
     * @var int
     */
    public $spuId;

    /**
     * @var int
     */
    public $ticketKindId;
    protected $_name = [
        'spuId' => 'SpuId',
        'ticketKindId' => 'TicketKindId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->spuId) {
            $res['SpuId'] = $this->spuId;
        }

        if (null !== $this->ticketKindId) {
            $res['TicketKindId'] = $this->ticketKindId;
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
        if (isset($map['SpuId'])) {
            $model->spuId = $map['SpuId'];
        }

        if (isset($map['TicketKindId'])) {
            $model->ticketKindId = $map['TicketKindId'];
        }

        return $model;
    }
}
