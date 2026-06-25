<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteGroupRequest extends Model
{
    /**
     * @var string
     */
    public $cascadeDelete;
    protected $_name = [
        'cascadeDelete' => 'CascadeDelete',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cascadeDelete) {
            $res['CascadeDelete'] = $this->cascadeDelete;
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
        if (isset($map['CascadeDelete'])) {
            $model->cascadeDelete = $map['CascadeDelete'];
        }

        return $model;
    }
}
