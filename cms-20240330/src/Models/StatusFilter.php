<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class StatusFilter extends Model
{
    /**
     * @var string
     */
    public $eq;
    protected $_name = [
        'eq' => 'eq',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eq) {
            $res['eq'] = $this->eq;
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
        if (isset($map['eq'])) {
            $model->eq = $map['eq'];
        }

        return $model;
    }
}
