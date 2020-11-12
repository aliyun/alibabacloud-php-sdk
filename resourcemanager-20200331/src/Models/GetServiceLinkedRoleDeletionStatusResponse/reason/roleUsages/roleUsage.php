<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponse\reason\roleUsages;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponse\reason\roleUsages\roleUsage\resources;
use AlibabaCloud\Tea\Model;

class roleUsage extends Model
{
    /**
     * @var string
     */
    public $region;

    /**
     * @var resources
     */
    public $resources;
    protected $_name = [
        'region'    => 'Region',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('resources', $this->resources, true);
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
