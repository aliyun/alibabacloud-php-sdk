<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $cmsInstanceType;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmvscak73zmby
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags to add to the resource.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'cmsInstanceType' => 'cmsInstanceType',
        'resourceGroupId' => 'resourceGroupId',
        'tag'             => 'tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmsInstanceType) {
            $res['cmsInstanceType'] = $this->cmsInstanceType;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cmsInstanceType'])) {
            $model->cmsInstanceType = $map['cmsInstanceType'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
