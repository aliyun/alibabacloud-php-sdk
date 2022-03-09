<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class CustomFindOrderStatusRequest extends Model
{
    /**
     * @var string
     */
    public $orderIdCipher;
    protected $_name = [
        'orderIdCipher' => 'OrderIdCipher',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIdCipher) {
            $res['OrderIdCipher'] = $this->orderIdCipher;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CustomFindOrderStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderIdCipher'])) {
            $model->orderIdCipher = $map['OrderIdCipher'];
        }

        return $model;
    }
}
