<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskListResponseBody\model;

use AlibabaCloud\Dara\Model;

class intentTags extends Model
{
    /**
     * @var string
     */
    public $intentDescription;

    /**
     * @var string
     */
    public $intentTag;
    protected $_name = [
        'intentDescription' => 'IntentDescription',
        'intentTag' => 'IntentTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intentDescription) {
            $res['IntentDescription'] = $this->intentDescription;
        }

        if (null !== $this->intentTag) {
            $res['IntentTag'] = $this->intentTag;
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
        if (isset($map['IntentDescription'])) {
            $model->intentDescription = $map['IntentDescription'];
        }

        if (isset($map['IntentTag'])) {
            $model->intentTag = $map['IntentTag'];
        }

        return $model;
    }
}
