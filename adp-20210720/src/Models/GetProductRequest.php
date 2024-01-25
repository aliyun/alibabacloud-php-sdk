<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GetProductRequest extends Model
{
    /**
     * @var bool
     */
    public $withIconURL;
    protected $_name = [
        'withIconURL' => 'withIconURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withIconURL) {
            $res['withIconURL'] = $this->withIconURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['withIconURL'])) {
            $model->withIconURL = $map['withIconURL'];
        }

        return $model;
    }
}
