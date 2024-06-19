<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack;

use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack\scope\excludeTagsScope;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack\scope\tagsScope;
use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @var string
     */
    public $excludeRegionIdsScope;

    /**
     * @var string
     */
    public $excludeResourceGroupIdsScope;

    /**
     * @description The ID of the resource that you do not want to evaluate by using the compliance package.
     *
     * @example eip-8vbf3x310fn56ijfd****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

    /**
     * @description This parameter is required.
     *
     * @var excludeTagsScope[]
     */
    public $excludeTagsScope;

    /**
     * @description The ID of the region whose resources you want to evaluate by using the compliance package.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionIdsScope;

    /**
     * @description The ID of the resource group whose resources you want to evaluate by using the compliance package.
     *
     * @example rg-aekzc7r7rhx****
     *
     * @var string
     */
    public $resourceGroupIdsScope;

    /**
     * @var string
     */
    public $resourceIdsScope;

    /**
     * @description The tag key of the resource that you want to evaluate by using the compliance package.
     *
     * @example ECS
     *
     * @var string
     */
    public $tagKeyScope;

    /**
     * @description The tag value of the resource that you want to evaluate by using the compliance package.
     *
     * @example test
     *
     * @var string
     */
    public $tagValueScope;

    /**
     * @description This parameter is required.
     *
     * @var tagsScope[]
     */
    public $tagsScope;
    protected $_name = [
        'excludeRegionIdsScope'        => 'ExcludeRegionIdsScope',
        'excludeResourceGroupIdsScope' => 'ExcludeResourceGroupIdsScope',
        'excludeResourceIdsScope'      => 'ExcludeResourceIdsScope',
        'excludeTagsScope'             => 'ExcludeTagsScope',
        'regionIdsScope'               => 'RegionIdsScope',
        'resourceGroupIdsScope'        => 'ResourceGroupIdsScope',
        'resourceIdsScope'             => 'ResourceIdsScope',
        'tagKeyScope'                  => 'TagKeyScope',
        'tagValueScope'                => 'TagValueScope',
        'tagsScope'                    => 'TagsScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeRegionIdsScope) {
            $res['ExcludeRegionIdsScope'] = $this->excludeRegionIdsScope;
        }
        if (null !== $this->excludeResourceGroupIdsScope) {
            $res['ExcludeResourceGroupIdsScope'] = $this->excludeResourceGroupIdsScope;
        }
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }
        if (null !== $this->excludeTagsScope) {
            $res['ExcludeTagsScope'] = [];
            if (null !== $this->excludeTagsScope && \is_array($this->excludeTagsScope)) {
                $n = 0;
                foreach ($this->excludeTagsScope as $item) {
                    $res['ExcludeTagsScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionIdsScope) {
            $res['RegionIdsScope'] = $this->regionIdsScope;
        }
        if (null !== $this->resourceGroupIdsScope) {
            $res['ResourceGroupIdsScope'] = $this->resourceGroupIdsScope;
        }
        if (null !== $this->resourceIdsScope) {
            $res['ResourceIdsScope'] = $this->resourceIdsScope;
        }
        if (null !== $this->tagKeyScope) {
            $res['TagKeyScope'] = $this->tagKeyScope;
        }
        if (null !== $this->tagValueScope) {
            $res['TagValueScope'] = $this->tagValueScope;
        }
        if (null !== $this->tagsScope) {
            $res['TagsScope'] = [];
            if (null !== $this->tagsScope && \is_array($this->tagsScope)) {
                $n = 0;
                foreach ($this->tagsScope as $item) {
                    $res['TagsScope'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scope
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExcludeRegionIdsScope'])) {
            $model->excludeRegionIdsScope = $map['ExcludeRegionIdsScope'];
        }
        if (isset($map['ExcludeResourceGroupIdsScope'])) {
            $model->excludeResourceGroupIdsScope = $map['ExcludeResourceGroupIdsScope'];
        }
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }
        if (isset($map['ExcludeTagsScope'])) {
            if (!empty($map['ExcludeTagsScope'])) {
                $model->excludeTagsScope = [];
                $n                       = 0;
                foreach ($map['ExcludeTagsScope'] as $item) {
                    $model->excludeTagsScope[$n++] = null !== $item ? excludeTagsScope::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionIdsScope'])) {
            $model->regionIdsScope = $map['RegionIdsScope'];
        }
        if (isset($map['ResourceGroupIdsScope'])) {
            $model->resourceGroupIdsScope = $map['ResourceGroupIdsScope'];
        }
        if (isset($map['ResourceIdsScope'])) {
            $model->resourceIdsScope = $map['ResourceIdsScope'];
        }
        if (isset($map['TagKeyScope'])) {
            $model->tagKeyScope = $map['TagKeyScope'];
        }
        if (isset($map['TagValueScope'])) {
            $model->tagValueScope = $map['TagValueScope'];
        }
        if (isset($map['TagsScope'])) {
            if (!empty($map['TagsScope'])) {
                $model->tagsScope = [];
                $n                = 0;
                foreach ($map['TagsScope'] as $item) {
                    $model->tagsScope[$n++] = null !== $item ? tagsScope::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
