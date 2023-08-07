<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListRequest;

use AlibabaCloud\Tea\Model;

class addPrefixListEntry extends Model
{
    /**
     * @description The CIDR block to be added to the prefix list.
     *
     * >  If the CIDR block already exists in the prefix list, you can only modify the description of the CIDR block by setting the **AddPrefixListEntry.N.Description** parameter.
     * @example 172.16.0.0/12
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description of the CIDR block to be added to the prefix list.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example newcidr
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
     * @return addPrefixListEntry
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
