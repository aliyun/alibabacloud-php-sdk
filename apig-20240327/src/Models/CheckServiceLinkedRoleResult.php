<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CheckServiceLinkedRoleResult extends Model
{
    /**
     * @var bool
     */
    public $existed;
    protected $_name = [
        'existed' => 'existed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->existed) {
            $res['existed'] = $this->existed;
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
        if (isset($map['existed'])) {
            $model->existed = $map['existed'];
        }

        return $model;
    }
}
