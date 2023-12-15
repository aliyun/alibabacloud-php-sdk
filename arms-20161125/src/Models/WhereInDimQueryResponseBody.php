<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20161125\Models;

use AlibabaCloud\Tea\Model;

class WhereInDimQueryResponseBody extends Model
{
    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'data' => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WhereInDimQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        return $model;
    }
}
