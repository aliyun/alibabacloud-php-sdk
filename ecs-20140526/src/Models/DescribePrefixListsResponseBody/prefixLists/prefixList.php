<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists;

use AlibabaCloud\Dara\Model;

class prefixList extends Model
{
    /**
     * @var string
     */
    public $addressFamily;
    /**
     * @var int
     */
    public $associationCount;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $maxEntries;
    /**
     * @var string
     */
    public $prefixListId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
