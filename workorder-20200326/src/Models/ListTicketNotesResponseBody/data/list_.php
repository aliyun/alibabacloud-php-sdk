<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models\ListTicketNotesResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $fromOfficial;

    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $noteId;
    protected $_name = [
        'content' => 'Content',
        'fromOfficial' => 'FromOfficial',
        'gmtCreated' => 'GmtCreated',
        'noteId' => 'NoteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->fromOfficial) {
            $res['FromOfficial'] = $this->fromOfficial;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['FromOfficial'])) {
            $model->fromOfficial = $map['FromOfficial'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }

        return $model;
    }
}
