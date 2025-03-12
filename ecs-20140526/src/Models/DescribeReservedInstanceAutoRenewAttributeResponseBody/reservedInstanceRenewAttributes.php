<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstanceAutoRenewAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstanceAutoRenewAttributeResponseBody\reservedInstanceRenewAttributes\reservedInstanceRenewAttribute;
use AlibabaCloud\Tea\Model;

class reservedInstanceRenewAttributes extends Model
{
    /**
     * @var reservedInstanceRenewAttribute[]
     */
    public $reservedInstanceRenewAttribute;
    protected $_name = [
        'reservedInstanceRenewAttribute' => 'ReservedInstanceRenewAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceRenewAttribute) {
            $res['ReservedInstanceRenewAttribute'] = [];
            if (null !== $this->reservedInstanceRenewAttribute && \is_array($this->reservedInstanceRenewAttribute)) {
                $n = 0;
                foreach ($this->reservedInstanceRenewAttribute as $item) {
                    $res['ReservedInstanceRenewAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedInstanceRenewAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstanceRenewAttribute'])) {
            if (!empty($map['ReservedInstanceRenewAttribute'])) {
                $model->reservedInstanceRenewAttribute = [];
                $n                                     = 0;
                foreach ($map['ReservedInstanceRenewAttribute'] as $item) {
                    $model->reservedInstanceRenewAttribute[$n++] = null !== $item ? reservedInstanceRenewAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
