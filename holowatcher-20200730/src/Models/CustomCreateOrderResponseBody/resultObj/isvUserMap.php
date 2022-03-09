<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponseBody\resultObj;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\CustomCreateOrderResponseBody\resultObj\isvUserMap\CUSTOMER;
use AlibabaCloud\Tea\Model;

class isvUserMap extends Model
{
    /**
     * @var CUSTOMER
     */
    public $CUSTOMER;
    protected $_name = [
        'CUSTOMER' => 'CUSTOMER',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CUSTOMER) {
            $res['CUSTOMER'] = null !== $this->CUSTOMER ? $this->CUSTOMER->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return isvUserMap
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CUSTOMER'])) {
            $model->CUSTOMER = CUSTOMER::fromMap($map['CUSTOMER']);
        }

        return $model;
    }
}
