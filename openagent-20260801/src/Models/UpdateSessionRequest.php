<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models;

use AlibabaCloud\Dara\Model;

class UpdateSessionRequest extends Model
{
    /**
     * @var bool
     */
    public $pinned;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'pinned' => 'pinned',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pinned) {
            $res['pinned'] = $this->pinned;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['pinned'])) {
            $model->pinned = $map['pinned'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
