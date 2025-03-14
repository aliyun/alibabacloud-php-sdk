<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\BatchCreateMaliciousNoteRequest;

use AlibabaCloud\Tea\Model;

class imageMaliciousFileList extends Model
{
    /**
     * @description The ID of the alert.
     *
     * >  You can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to query the alert IDs.
     *
     * @example 1
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The description.
     *
     * @example Malware sample
     *
     * @var string
     */
    public $note;
    protected $_name = [
        'eventId' => 'EventId',
        'note' => 'Note',
    ];

    public function validate() {}

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
     * @return imageMaliciousFileList
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
