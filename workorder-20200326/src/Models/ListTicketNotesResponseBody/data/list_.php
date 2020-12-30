<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models\ListTicketNotesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $noteId;

    /**
     * @var bool
     */
    public $fromOfficial;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'gmtCreated'   => 'GmtCreated',
        'noteId'       => 'NoteId',
        'fromOfficial' => 'FromOfficial',
        'content'      => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }
        if (null !== $this->fromOfficial) {
            $res['FromOfficial'] = $this->fromOfficial;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }
        if (isset($map['FromOfficial'])) {
            $model->fromOfficial = $map['FromOfficial'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
