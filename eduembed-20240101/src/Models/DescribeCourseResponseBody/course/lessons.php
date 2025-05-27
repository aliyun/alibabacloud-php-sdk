<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models\DescribeCourseResponseBody\course;

use AlibabaCloud\Dara\Model;

class lessons extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'duration' => 'Duration',
        'id' => 'Id',
        'title' => 'Title',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
