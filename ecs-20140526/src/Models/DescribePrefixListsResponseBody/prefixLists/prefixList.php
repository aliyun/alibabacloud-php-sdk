<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists;

use AlibabaCloud\Tea\Model;

class prefixList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $associationCount;

    /**
     * @var int
     */
    public $maxEntries;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $addressFamily;

    /**
     * @var string
     */
    public $prefixListName;

    /**
     * @var string
     */
    public $prefixListId;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'associationCount' => 'AssociationCount',
        'maxEntries'       => 'MaxEntries',
        'description'      => 'Description',
        'addressFamily'    => 'AddressFamily',
        'prefixListName'   => 'PrefixListName',
        'prefixListId'     => 'PrefixListId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->associationCount) {
            $res['AssociationCount'] = $this->associationCount;
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->addressFamily) {
            $res['AddressFamily'] = $this->addressFamily;
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['AssociationCount'])) {
            $model->associationCount = $map['AssociationCount'];
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AddressFamily'])) {
            $model->addressFamily = $map['AddressFamily'];
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }

        return $model;
    }
}
