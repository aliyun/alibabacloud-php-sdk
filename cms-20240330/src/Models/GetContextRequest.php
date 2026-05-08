<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetContextRequest extends Model
{
    /**
     * @var bool
     */
    public $formatted;
    protected $_name = [
        'formatted' => 'formatted',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formatted) {
            $res['formatted'] = $this->formatted;
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
        if (isset($map['formatted'])) {
            $model->formatted = $map['formatted'];
        }

        return $model;
    }
}
