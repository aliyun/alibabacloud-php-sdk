<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DevelopServiceRequest extends Model
{
    /**
     * @var string
     */
    public $exit;
    protected $_name = [
        'exit' => 'Exit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exit) {
            $res['Exit'] = $this->exit;
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
        if (isset($map['Exit'])) {
            $model->exit = $map['Exit'];
        }

        return $model;
    }
}
