<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;

class autoChapters extends Model
{
    /**
     * @var string
     */
    public $chapterGranularity;
    protected $_name = [
        'chapterGranularity' => 'ChapterGranularity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chapterGranularity) {
            $res['ChapterGranularity'] = $this->chapterGranularity;
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
        if (isset($map['ChapterGranularity'])) {
            $model->chapterGranularity = $map['ChapterGranularity'];
        }

        return $model;
    }
}
