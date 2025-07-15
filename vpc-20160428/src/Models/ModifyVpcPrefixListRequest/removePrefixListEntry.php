<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListRequest;

use AlibabaCloud\Tea\Model;

class removePrefixListEntry extends Model
{
    /**
     * @description The CIDR block that you want to delete from the prefix list.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description of the CIDR block that you want to delete.
     *
     * @example cidr
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'cidr' => 'Cidr',
        'description' => 'Description',
    ];

    public function validate() {}

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
     * @return removePrefixListEntry
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
