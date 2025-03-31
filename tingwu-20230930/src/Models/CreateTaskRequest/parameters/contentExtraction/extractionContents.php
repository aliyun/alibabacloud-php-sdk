<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\contentExtraction;

use AlibabaCloud\Dara\Model;

class extractionContents extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $identity;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'Content',
        'identity' => 'Identity',
        'title' => 'Title',
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

        if (null !== $this->identity) {
            $res['Identity'] = $this->identity;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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

        if (isset($map['Identity'])) {
            $model->identity = $map['Identity'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
