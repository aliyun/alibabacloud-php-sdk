<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsShrinkRequest extends Model
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
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'bizExtKey'                      => 'BizExtKey',
        'keyword'                        => 'Keyword',
        'resourceGroupType'              => 'ResourceGroupType',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tagsShrink'                     => 'Tags',
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceGroupsShrinkRequest
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
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
