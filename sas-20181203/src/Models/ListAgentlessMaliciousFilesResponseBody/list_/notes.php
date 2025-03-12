<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessMaliciousFilesResponseBody\list_;

use AlibabaCloud\Tea\Model;

class notes extends Model
{
    /**
     * @description The remark.
     *
     * @example Serious***
     *
     * @var string
     */
    public $note;

    /**
     * @description The ID of the remark.
     *
     * @example 50****
     *
     * @var string
     */
    public $noteId;

    /**
     * @description The time when the remark was created.
     *
     * @example 2023-04-27 14:49:21
     *
     * @var string
     */
    public $noteTime;
    protected $_name = [
        'note'     => 'Note',
        'noteId'   => 'NoteId',
        'noteTime' => 'NoteTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }
        if (null !== $this->noteTime) {
            $res['NoteTime'] = $this->noteTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }
        if (isset($map['NoteTime'])) {
            $model->noteTime = $map['NoteTime'];
        }

        return $model;
    }
}
