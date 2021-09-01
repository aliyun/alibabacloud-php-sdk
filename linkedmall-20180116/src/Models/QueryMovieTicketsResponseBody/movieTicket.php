<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieTicketsResponseBody;

use AlibabaCloud\Tea\Model;

class movieTicket extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tbOrderId;

    /**
     * @var string
     */
    public $ticketContents;

    /**
     * @var string
     */
    public $returnMessage;
    protected $_name = [
        'status'         => 'Status',
        'tbOrderId'      => 'TbOrderId',
        'ticketContents' => 'TicketContents',
        'returnMessage'  => 'ReturnMessage',
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
        if (null !== $this->tbOrderId) {
            $res['TbOrderId'] = $this->tbOrderId;
        }
        if (null !== $this->ticketContents) {
            $res['TicketContents'] = $this->ticketContents;
        }
        if (null !== $this->returnMessage) {
            $res['ReturnMessage'] = $this->returnMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return movieTicket
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TbOrderId'])) {
            $model->tbOrderId = $map['TbOrderId'];
        }
        if (isset($map['TicketContents'])) {
            $model->ticketContents = $map['TicketContents'];
        }
        if (isset($map['ReturnMessage'])) {
            $model->returnMessage = $map['ReturnMessage'];
        }

        return $model;
    }
}
