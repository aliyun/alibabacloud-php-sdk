<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200801\Models;

use AlibabaCloud\Dara\Model;

class GetAttachmentUrlRequest extends Model
{
    /**
     * @var string
     */
    public $attachName;

    /**
     * @var string
     */
    public $noteId;

    /**
     * @var string
     */
    public $ticketId;
    protected $_name = [
        'attachName' => 'AttachName',
        'noteId' => 'NoteId',
        'ticketId' => 'TicketId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachName) {
            $res['AttachName'] = $this->attachName;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
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
        if (isset($map['AttachName'])) {
            $model->attachName = $map['AttachName'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }

        return $model;
    }
}
