<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteMaliciousNoteRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $noteId;
    protected $_name = [
        'noteId' => 'NoteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMaliciousNoteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        return $model;
    }
}
