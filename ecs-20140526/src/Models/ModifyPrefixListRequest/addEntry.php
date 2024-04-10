<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest;

use AlibabaCloud\Tea\Model;

class addEntry extends Model
{
    /**
     * @description The CIDR block in entry N to be added to the prefix list. Valid values of N: 0 to 200.
     *
     * Take note of the following items when you add the entries:
     *
     *   The total number of entries in the prefix list cannot exceed the maximum number of entries you specified for the prefix list. You can call the [DescribePrefixListAttributes](~~205872~~) operation to query the maximum number of entries that the prefix list can contain.
     *   You cannot specify duplicate CIDR blocks.
     *   The CIDR blocks cannot be the same as the `RemoveEntry.N.Cidr` values.
     *
     * @example 192.168.2.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description in entry N. The description must be 2 to 32 characters in length and cannot start with `http://` or `https://`. Valid values of N: 0 to 200.
     *
     * @example Description Sample 01
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'cidr'        => 'Cidr',
        'description' => 'Description',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
