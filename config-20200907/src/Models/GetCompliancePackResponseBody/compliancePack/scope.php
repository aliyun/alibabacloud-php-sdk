<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack;

use AlibabaCloud\Tea\Model;

class scope extends Model
{
    /**
     * @description The ID of the resource that you do not want to evaluate by using the compliance package.
     *
     * @example eip-8vbf3x310fn56ijfd****
     *
     * @var string
     */
    public $excludeResourceIdsScope;

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
    protected $_name = [
        'excludeResourceIdsScope' => 'ExcludeResourceIdsScope',
        'regionIdsScope'          => 'RegionIdsScope',
        'resourceGroupIdsScope'   => 'ResourceGroupIdsScope',
        'tagKeyScope'             => 'TagKeyScope',
        'tagValueScope'           => 'TagValueScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->excludeResourceIdsScope) {
            $res['ExcludeResourceIdsScope'] = $this->excludeResourceIdsScope;
        }
        if (null !== $this->regionIdsScope) {
            $res['RegionIdsScope'] = $this->regionIdsScope;
        }
        if (null !== $this->resourceGroupIdsScope) {
            $res['ResourceGroupIdsScope'] = $this->resourceGroupIdsScope;
        }
        if (null !== $this->tagKeyScope) {
            $res['TagKeyScope'] = $this->tagKeyScope;
        }
        if (null !== $this->tagValueScope) {
            $res['TagValueScope'] = $this->tagValueScope;
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
        if (isset($map['ExcludeResourceIdsScope'])) {
            $model->excludeResourceIdsScope = $map['ExcludeResourceIdsScope'];
        }
        if (isset($map['RegionIdsScope'])) {
            $model->regionIdsScope = $map['RegionIdsScope'];
        }
        if (isset($map['ResourceGroupIdsScope'])) {
            $model->resourceGroupIdsScope = $map['ResourceGroupIdsScope'];
        }
        if (isset($map['TagKeyScope'])) {
            $model->tagKeyScope = $map['TagKeyScope'];
        }
        if (isset($map['TagValueScope'])) {
            $model->tagValueScope = $map['TagValueScope'];
        }

        return $model;
    }
}
