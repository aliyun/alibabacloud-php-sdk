<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class DeleteProjectRequest extends Model
{
    /**
     * @var bool
     */
    public $isLogical;
    protected $_name = [
        'isLogical' => 'isLogical',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isLogical) {
            $res['isLogical'] = $this->isLogical;
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
        if (isset($map['isLogical'])) {
            $model->isLogical = $map['isLogical'];
        }

        return $model;
    }
}
