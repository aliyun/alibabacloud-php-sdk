<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateRoutineWithAssetsCodeVersionRequest;

use AlibabaCloud\Dara\Model;

class confOptions extends Model
{
    /**
     * @var string
     */
    public $notFoundStrategy;
    protected $_name = [
        'notFoundStrategy' => 'NotFoundStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notFoundStrategy) {
            $res['NotFoundStrategy'] = $this->notFoundStrategy;
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
        if (isset($map['NotFoundStrategy'])) {
            $model->notFoundStrategy = $map['NotFoundStrategy'];
        }

        return $model;
    }
}
