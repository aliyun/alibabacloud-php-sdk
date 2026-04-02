<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DisplayNameFilter extends Model
{
    /**
     * @var string
     */
    public $contains;

    /**
     * @var string
     */
    public $notContains;
    protected $_name = [
        'contains' => 'contains',
        'notContains' => 'notContains',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contains) {
            $res['contains'] = $this->contains;
        }

        if (null !== $this->notContains) {
            $res['notContains'] = $this->notContains;
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
        if (isset($map['contains'])) {
            $model->contains = $map['contains'];
        }

        if (isset($map['notContains'])) {
            $model->notContains = $map['notContains'];
        }

        return $model;
    }
}
