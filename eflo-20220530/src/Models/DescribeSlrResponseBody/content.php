<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\DescribeSlrResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var bool
     */
    public $hasRole;
    protected $_name = [
        'hasRole' => 'HasRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasRole) {
            $res['HasRole'] = $this->hasRole;
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
        if (isset($map['HasRole'])) {
            $model->hasRole = $map['HasRole'];
        }

        return $model;
    }
}
