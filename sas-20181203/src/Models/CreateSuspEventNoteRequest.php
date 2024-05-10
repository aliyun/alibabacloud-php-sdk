<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSuspEventNoteRequest extends Model
{
    /**
     * @description The ID of the alert event to which you want to add remarks. You can call the [DescribeSuspEvents](https://help.aliyun.com/document_detail/251497.html) operation to query the IDs of alert events.
     *
     * This parameter is required.
     * @example 668931
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The remarks that you want to add.
     *
     * This parameter is required.
     * @example Ignore
     *
     * @var string
     */
    public $note;
    protected $_name = [
        'eventId' => 'EventId',
        'note'    => 'Note',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSuspEventNoteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }

        return $model;
    }
}
