<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\CustomerNoteListResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $contactName;

    /**
     * @var int
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $noteContent;

    /**
     * @var int
     */
    public $noteId;

    /**
     * @var string
     */
    public $noteType;

    /**
     * @var string
     */
    public $noteTypeLabel;

    /**
     * @var string
     */
    public $touchDate;
    protected $_name = [
        'contactName' => 'ContactName',
        'creator' => 'Creator',
        'creatorName' => 'CreatorName',
        'gmtCreate' => 'GmtCreate',
        'noteContent' => 'NoteContent',
        'noteId' => 'NoteId',
        'noteType' => 'NoteType',
        'noteTypeLabel' => 'NoteTypeLabel',
        'touchDate' => 'TouchDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->noteContent) {
            $res['NoteContent'] = $this->noteContent;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }

        if (null !== $this->noteType) {
            $res['NoteType'] = $this->noteType;
        }

        if (null !== $this->noteTypeLabel) {
            $res['NoteTypeLabel'] = $this->noteTypeLabel;
        }

        if (null !== $this->touchDate) {
            $res['TouchDate'] = $this->touchDate;
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
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['NoteContent'])) {
            $model->noteContent = $map['NoteContent'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['NoteType'])) {
            $model->noteType = $map['NoteType'];
        }

        if (isset($map['NoteTypeLabel'])) {
            $model->noteTypeLabel = $map['NoteTypeLabel'];
        }

        if (isset($map['TouchDate'])) {
            $model->touchDate = $map['TouchDate'];
        }

        return $model;
    }
}
