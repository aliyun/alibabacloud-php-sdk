<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListsResponseBody\portRangeLists\tags;
use AlibabaCloud\Tea\Model;

class portRangeLists extends Model
{
    /**
     * @description The number of associated resources.
     *
     * @example 1
     *
     * @var int
     */
    public $associationCount;

    /**
     * @description The time when the port list was created.
     *
     * @example 2024-12-04T07:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the port list.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The maximum number of entries in the port list.
     *
     * @example 20
     *
     * @var int
     */
    public $maxEntries;

    /**
     * @description The ID of the port list.
     *
     * @example prl-2ze9743****
     *
     * @var string
     */
    public $portRangeListId;

    /**
     * @description The name of the port list.
     *
     * @example PortRangeListNameSample
     *
     * @var string
     */
    public $portRangeListName;

    /**
     * @description The ID of the resource group to which to assign the port list.
     *
     * @example rg-2zeg82g****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the port list.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'associationCount' => 'AssociationCount',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'maxEntries' => 'MaxEntries',
        'portRangeListId' => 'PortRangeListId',
        'portRangeListName' => 'PortRangeListName',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->portRangeListId) {
            $res['PortRangeListId'] = $this->portRangeListId;
        }
        if (null !== $this->portRangeListName) {
            $res['PortRangeListName'] = $this->portRangeListName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return portRangeLists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['PortRangeListId'])) {
            $model->portRangeListId = $map['PortRangeListId'];
        }
        if (isset($map['PortRangeListName'])) {
            $model->portRangeListName = $map['PortRangeListName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
