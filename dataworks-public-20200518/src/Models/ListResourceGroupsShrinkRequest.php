<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListResourceGroupsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizExtKey;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $resourceGroupType;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $typeNames;
    protected $_name = [
        'bizExtKey'                      => 'BizExtKey',
        'keyword'                        => 'Keyword',
        'resourceGroupType'              => 'ResourceGroupType',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tagsShrink'                     => 'Tags',
        'typeNames'                      => 'TypeNames',
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
        if (null !== $this->typeNames) {
            $res['TypeNames'] = $this->typeNames;
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
        if (isset($map['TypeNames'])) {
            $model->typeNames = $map['TypeNames'];
        }

        return $model;
    }
}
