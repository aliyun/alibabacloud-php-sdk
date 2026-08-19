<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class DeleteForwardStrategyRequest extends Model
{
    /**
     * @var string
     */
    public $forwardId;
    protected $_name = [
        'forwardId' => 'ForwardId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardId) {
            $res['ForwardId'] = $this->forwardId;
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
        if (isset($map['ForwardId'])) {
            $model->forwardId = $map['ForwardId'];
        }

        return $model;
    }
}
