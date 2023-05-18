<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason\roleUsages;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason\roleUsages\roleUsage\resources;
use AlibabaCloud\Tea\Model;

class roleUsage extends Model
{
    /**
     * @description The IDs of the regions in which the resources are to be queried.
     *
     * @example global
     *
     * @var string
     */
    public $region;

    /**
     * @description The returned resources.
     *
     * @var resources
     */
    public $resources;
    protected $_name = [
        'region'    => 'Region',
        'resources' => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resources) {
            $res['Resources'] = null !== $this->resources ? $this->resources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Resources'])) {
            $model->resources = resources::fromMap($map['Resources']);
        }

        return $model;
    }
}
