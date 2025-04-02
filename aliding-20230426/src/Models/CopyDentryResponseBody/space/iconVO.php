<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CopyDentryResponseBody\space;

use AlibabaCloud\Dara\Model;

class iconVO extends Model
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'icon' => 'Icon',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
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
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
