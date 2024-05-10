<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteSuspEventNodeRequest extends Model
{
    /**
     * @description The ID of the description.
     *
     * This parameter is required.
     * @example 123
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
     * @return DeleteSuspEventNodeRequest
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
