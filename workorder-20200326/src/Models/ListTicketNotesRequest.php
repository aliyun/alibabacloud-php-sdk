<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models;

use AlibabaCloud\Tea\Model;

class ListTicketNotesRequest extends Model
{
    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'language' => 'Language',
        'ticketId' => 'TicketId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTicketNotesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
