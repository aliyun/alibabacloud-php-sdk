<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentNoteStruct\operator;
use AlibabaCloud\Tea\Model;

class IncidentNoteStruct extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $incidentId;

    /**
     * @var string
     */
    public $noteId;

    /**
     * @var operator
     */
    public $operator;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'content',
        'format' => 'format',
        'incidentId' => 'incidentId',
        'noteId' => 'noteId',
        'operator' => 'operator',
        'time' => 'time',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->noteId) {
            $res['noteId'] = $this->noteId;
        }
        if (null !== $this->operator) {
            $res['operator'] = null !== $this->operator ? $this->operator->toMap() : null;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentNoteStruct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['noteId'])) {
            $model->noteId = $map['noteId'];
        }
        if (isset($map['operator'])) {
            $model->operator = operator::fromMap($map['operator']);
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
