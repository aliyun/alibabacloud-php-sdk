<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextResponseBody;

use AlibabaCloud\Dara\Model;

class countTextCmdList extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $theme;
    protected $_name = [
        'count' => 'count',
        'theme' => 'theme',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->theme) {
            $res['theme'] = $this->theme;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['theme'])) {
            $model->theme = $map['theme'];
        }

        return $model;
    }
}
