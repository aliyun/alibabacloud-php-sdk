<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetConstraintRequest extends Model
{
    /**
     * @var string
     */
    public $constraintId;
    protected $_name = [
        'constraintId' => 'ConstraintId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->constraintId) {
            $res['ConstraintId'] = $this->constraintId;
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
        if (isset($map['ConstraintId'])) {
            $model->constraintId = $map['ConstraintId'];
        }

        return $model;
    }
}
