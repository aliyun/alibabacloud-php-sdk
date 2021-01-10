<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryAddressResponseBody\divisionAddress\divisionAddress;
use AlibabaCloud\Tea\Model;

class divisionAddress extends Model
{
    /**
     * @var divisionAddress[]
     */
    public $divisionAddress;
    protected $_name = [
        'divisionAddress' => 'DivisionAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionAddress) {
            $res['DivisionAddress'] = [];
            if (null !== $this->divisionAddress && \is_array($this->divisionAddress)) {
                $n = 0;
                foreach ($this->divisionAddress as $item) {
                    $res['DivisionAddress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return divisionAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DivisionAddress'])) {
            if (!empty($map['DivisionAddress'])) {
                $model->divisionAddress = [];
                $n                      = 0;
                foreach ($map['DivisionAddress'] as $item) {
                    $model->divisionAddress[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
