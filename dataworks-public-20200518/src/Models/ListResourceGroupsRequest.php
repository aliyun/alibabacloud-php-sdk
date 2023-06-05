<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListResourceGroupsRequest\tags;
use AlibabaCloud\Tea\Model;

class ListResourceGroupsRequest extends Model
{
    /**
     * @description The tags.
     *
     * @example default
     *
     * @var string
     */
    public $bizExtKey;

    /**
     * @description The ID of the resource group.
     *
     * @example abc
     *
     * @var string
     */
    public $keyword;

    /**
     * @description The category of the resource groups. Valid values:
     *
     *   default: shared resource group
     *   single: exclusive resource group
     *   Default value: default
     *
     * @example 3
     *
     * @var int
     */
    public $resourceGroupType;

    /**
     * @description The tag key.
     *
     * @example rg-acfmzbn7pti3zfa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The tag value.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'bizExtKey'                      => 'BizExtKey',
        'keyword'                        => 'Keyword',
        'resourceGroupType'              => 'ResourceGroupType',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tags'                           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizExtKey) {
            $res['BizExtKey'] = $this->bizExtKey;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
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
     * @return ListResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizExtKey'])) {
            $model->bizExtKey = $map['BizExtKey'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
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
