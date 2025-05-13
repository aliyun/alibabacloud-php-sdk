<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\IncidentNoteStruct\operator;

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

    public function validate()
    {
        if (null !== $this->operator) {
            $this->operator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['operator'] = null !== $this->operator ? $this->operator->toArray($noStream) : $this->operator;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
