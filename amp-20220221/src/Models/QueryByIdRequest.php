<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amp\V20220221\Models;

use AlibabaCloud\Tea\Model;

class QueryByIdRequest extends Model
{
    /**
     * @var string
     */
    public $one;
    protected $_name = [
        'one' => 'One',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->one) {
            $res['One'] = $this->one;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['One'])) {
            $model->one = $map['One'];
        }

        return $model;
    }
}
