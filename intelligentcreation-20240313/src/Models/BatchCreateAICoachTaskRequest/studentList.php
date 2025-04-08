<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchCreateAICoachTaskRequest;

use AlibabaCloud\Dara\Model;

class studentList extends Model
{
    /**
     * @var string
     */
    public $studentAudioUrl;

    /**
     * @var string
     */
    public $studentId;
    protected $_name = [
        'studentAudioUrl' => 'studentAudioUrl',
        'studentId' => 'studentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->studentAudioUrl) {
            $res['studentAudioUrl'] = $this->studentAudioUrl;
        }

        if (null !== $this->studentId) {
            $res['studentId'] = $this->studentId;
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
        if (isset($map['studentAudioUrl'])) {
            $model->studentAudioUrl = $map['studentAudioUrl'];
        }

        if (isset($map['studentId'])) {
            $model->studentId = $map['studentId'];
        }

        return $model;
    }
}
