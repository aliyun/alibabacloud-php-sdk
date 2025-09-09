<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class oppo extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $notifyLevel;
    protected $_name = [
        'category' => 'Category',
        'notifyLevel' => 'NotifyLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->notifyLevel) {
            $res['NotifyLevel'] = $this->notifyLevel;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['NotifyLevel'])) {
            $model->notifyLevel = $map['NotifyLevel'];
        }

        return $model;
    }
}
