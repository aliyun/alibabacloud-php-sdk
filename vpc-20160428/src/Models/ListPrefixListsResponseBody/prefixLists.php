<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListPrefixListsResponseBody\prefixLists\tags;
use AlibabaCloud\Tea\Model;

class prefixLists extends Model
{
    /**
     * @var string[]
     */
    public $cidrBlocks;

    /**
     * @example 2022-07-12T14:22:32Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example ipv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxEntries;

    /**
     * @example 1210123456123456
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example Created with oss service by system.
     *
     * @var string
     */
    public $prefixListDescription;

    /**
     * @example pl-m5estsqsdqwg88hjf****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @example test
     *
     * @var string
     */
    public $prefixListName;

    /**
     * @example Created
     *
     * @var string
     */
    public $prefixListStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Shared
     *
     * @var string
     */
    public $shareType;

    /**
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'cidrBlocks'            => 'CidrBlocks',
        'creationTime'          => 'CreationTime',
        'ipVersion'             => 'IpVersion',
        'maxEntries'            => 'MaxEntries',
        'ownerId'               => 'OwnerId',
        'prefixListDescription' => 'PrefixListDescription',
        'prefixListId'          => 'PrefixListId',
        'prefixListName'        => 'PrefixListName',
        'prefixListStatus'      => 'PrefixListStatus',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'shareType'             => 'ShareType',
        'status'                => 'Status',
        'tags'                  => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlocks) {
            $res['CidrBlocks'] = $this->cidrBlocks;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prefixLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlocks'])) {
            if (!empty($map['CidrBlocks'])) {
                $model->cidrBlocks = $map['CidrBlocks'];
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
