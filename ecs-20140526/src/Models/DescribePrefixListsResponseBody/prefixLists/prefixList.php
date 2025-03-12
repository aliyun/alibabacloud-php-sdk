<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists;

use AlibabaCloud\Tea\Model;

class prefixList extends Model
{
    /**
     * @description The IP address family of the prefix list. Valid values:
     *
     *   IPv4
     *   IPv6
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressFamily;

    /**
     * @description The number of associated resources.
     *
     * @example 1
     *
     * @var int
     */
    public $associationCount;

    /**
     * @description The time when the prefix list was created.
     *
     * @example 2021-02-20T07:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the prefix list.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum number of entries that the prefix list can contain.
     *
     * @example 20
     *
     * @var int
     */
    public $maxEntries;

    /**
     * @description The ID of the prefix list.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The name of the prefix list.
     *
     * @example PrefixListNameSample
     *
     * @var string
     */
    public $prefixListName;
    protected $_name = [
        'addressFamily'    => 'AddressFamily',
        'associationCount' => 'AssociationCount',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'maxEntries'       => 'MaxEntries',
        'prefixListId'     => 'PrefixListId',
        'prefixListName'   => 'PrefixListName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressFamily) {
            $res['AddressFamily'] = $this->addressFamily;
        }
        if (null !== $this->associationCount) {
            $res['AssociationCount'] = $this->associationCount;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefixList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressFamily'])) {
            $model->addressFamily = $map['AddressFamily'];
        }
        if (isset($map['AssociationCount'])) {
            $model->associationCount = $map['AssociationCount'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }

        return $model;
    }
}
