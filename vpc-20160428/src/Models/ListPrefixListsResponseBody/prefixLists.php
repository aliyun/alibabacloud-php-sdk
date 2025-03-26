<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody\prefixLists\tags;

class prefixLists extends Model
{
    /**
     * @var string[]
     */
    public $cidrBlocks;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $maxEntries;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prefixListDescription;

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
    public $prefixListStatus;

    /**
     * @var string
     */
    public $prefixListType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'cidrBlocks' => 'CidrBlocks',
        'creationTime' => 'CreationTime',
        'ipVersion' => 'IpVersion',
        'maxEntries' => 'MaxEntries',
        'ownerId' => 'OwnerId',
        'prefixListDescription' => 'PrefixListDescription',
        'prefixListId' => 'PrefixListId',
        'prefixListName' => 'PrefixListName',
        'prefixListStatus' => 'PrefixListStatus',
        'prefixListType' => 'PrefixListType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType' => 'ShareType',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->cidrBlocks)) {
            Model::validateArray($this->cidrBlocks);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlocks) {
            if (\is_array($this->cidrBlocks)) {
                $res['CidrBlocks'] = [];
                $n1 = 0;
                foreach ($this->cidrBlocks as $item1) {
                    $res['CidrBlocks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prefixListDescription) {
            $res['PrefixListDescription'] = $this->prefixListDescription;
        }

        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }

        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }

        if (null !== $this->prefixListStatus) {
            $res['PrefixListStatus'] = $this->prefixListStatus;
        }

        if (null !== $this->prefixListType) {
            $res['PrefixListType'] = $this->prefixListType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CidrBlocks'])) {
            if (!empty($map['CidrBlocks'])) {
                $model->cidrBlocks = [];
                $n1 = 0;
                foreach ($map['CidrBlocks'] as $item1) {
                    $model->cidrBlocks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PrefixListDescription'])) {
            $model->prefixListDescription = $map['PrefixListDescription'];
        }

        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }

        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }

        if (isset($map['PrefixListStatus'])) {
            $model->prefixListStatus = $map['PrefixListStatus'];
        }

        if (isset($map['PrefixListType'])) {
            $model->prefixListType = $map['PrefixListType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
