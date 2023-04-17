<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest;

use AlibabaCloud\Tea\Model;

class removeEntry extends Model
{
    /**
     * @description The CIDR block of entry N to be deleted from the prefix list. Valid values of N: 0 to 200.
     *
     * Take note of the following items when you delete the entries:
     *
     *   You cannot specify duplicate CIDR blocks.
     *   The CIDR blocks cannot be the same as the `AddEntry.N.Cidr` values.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $cidr;
    protected $_name = [
        'cidr' => 'Cidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removeEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        return $model;
    }
}
