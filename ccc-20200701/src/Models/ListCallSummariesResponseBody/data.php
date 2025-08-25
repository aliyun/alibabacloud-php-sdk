<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListCallSummariesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $context;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $editor;

    /**
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'contactId' => 'ContactId',
        'context' => 'Context',
        'createdTime' => 'CreatedTime',
        'creator' => 'Creator',
        'editor' => 'Editor',
        'ticketId' => 'TicketId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->editor) {
            $res['Editor'] = $this->editor;
        }

        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Editor'])) {
            $model->editor = $map['Editor'];
        }

        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
