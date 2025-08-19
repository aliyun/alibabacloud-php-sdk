<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->withAddonResources) {
            $res['with_addon_resources'] = $this->withAddonResources;
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
        if (isset($map['with_addon_resources'])) {
            $model->withAddonResources = $map['with_addon_resources'];
        }

        return $model;
    }
}
