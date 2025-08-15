<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAvailableAuditNotesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $noteId;

    /**
     * @var string
     */
    public $noteName;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'fileSize' => 'FileSize',
        'id' => 'Id',
        'noteId' => 'NoteId',
        'noteName' => 'NoteName',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        if (null !== $this->noteName) {
            $res['NoteName'] = $this->noteName;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['NoteName'])) {
            $model->noteName = $map['NoteName'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
