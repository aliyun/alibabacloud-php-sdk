<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterResourcesRequest extends Model
{
    /**
     * @var bool
     */
    public $withAddonResources;
    protected $_name = [
        'withAddonResources' => 'with_addon_resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->withAddonResources) {
            $res['with_addon_resources'] = $this->withAddonResources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['with_addon_resources'])) {
            $model->withAddonResources = $map['with_addon_resources'];
        }

        return $model;
    }
}
