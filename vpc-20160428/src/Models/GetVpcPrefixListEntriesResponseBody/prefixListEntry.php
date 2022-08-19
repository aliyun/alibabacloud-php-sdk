<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class prefixListEntry extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $prefixListId;
    protected $_name = [
        'cidr'         => 'Cidr',
        'description'  => 'Description',
        'prefixListId' => 'PrefixListId',
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
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefixListEntry
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
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }

        return $model;
    }
}
