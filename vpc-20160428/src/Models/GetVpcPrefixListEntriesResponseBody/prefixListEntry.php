<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcPrefixListEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class prefixListEntry extends Model
{
    /**
     * @description The CIDR blocks specified in the prefix list.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The description of the prefix list.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the prefix list.
     *
     * @example pl-0b7hwu67****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The region ID of the prefix list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cidr'         => 'Cidr',
        'description'  => 'Description',
        'prefixListId' => 'PrefixListId',
        'regionId'     => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
