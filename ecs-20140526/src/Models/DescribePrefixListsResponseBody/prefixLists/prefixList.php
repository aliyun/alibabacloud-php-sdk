<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePrefixListsResponseBody\prefixLists\prefixList\tags;

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

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'addressFamily' => 'AddressFamily',
        'associationCount' => 'AssociationCount',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'maxEntries' => 'MaxEntries',
        'prefixListId' => 'PrefixListId',
        'prefixListName' => 'PrefixListName',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
