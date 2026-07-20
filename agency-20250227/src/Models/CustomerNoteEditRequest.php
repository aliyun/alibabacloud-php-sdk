<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models;

use AlibabaCloud\Dara\Model;

class CustomerNoteEditRequest extends Model
{
    /**
     * @var string
     */
    public $contactInformation;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $noteContent;

    /**
     * @var int
     */
    public $noteId;

    /**
     * @var int
     */
    public $touchDate;
    protected $_name = [
        'contactInformation' => 'ContactInformation',
        'contactName' => 'ContactName',
        'noteContent' => 'NoteContent',
        'noteId' => 'NoteId',
        'touchDate' => 'TouchDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactInformation) {
            $res['ContactInformation'] = $this->contactInformation;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->noteContent) {
            $res['NoteContent'] = $this->noteContent;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
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
        if (isset($map['ContactInformation'])) {
            $model->contactInformation = $map['ContactInformation'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['NoteContent'])) {
            $model->noteContent = $map['NoteContent'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        if (isset($map['TouchDate'])) {
            $model->touchDate = $map['TouchDate'];
        }

        return $model;
    }
}
