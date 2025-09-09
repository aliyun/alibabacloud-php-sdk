<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\android\options;

use AlibabaCloud\Dara\Model;

class honor extends Model
{
    /**
     * @var int
     */
    public $importance;
    protected $_name = [
        'importance' => 'Importance',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->importance) {
            $res['Importance'] = $this->importance;
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
        if (isset($map['Importance'])) {
            $model->importance = $map['Importance'];
        }

        return $model;
    }
}
