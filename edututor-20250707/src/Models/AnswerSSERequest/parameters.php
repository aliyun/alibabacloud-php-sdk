<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduTutor\V20250707\Models\AnswerSSERequest;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var int
     */
    public $grade;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'grade' => 'grade',
        'stage' => 'stage',
        'subject' => 'subject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grade) {
            $res['grade'] = $this->grade;
        }

        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
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
        if (isset($map['grade'])) {
            $model->grade = $map['grade'];
        }

        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
