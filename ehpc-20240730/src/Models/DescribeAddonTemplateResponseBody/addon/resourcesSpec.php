<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon;

use AlibabaCloud\SDK\EHPC\V20240730\Models\AddonNodeTemplate;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\resourcesSpec\eipResource;
use AlibabaCloud\Tea\Model;

class resourcesSpec extends Model
{
    /**
     * @description The Elastic Compute Service (ECS) resource configurations of the addon.
     *
     * @var AddonNodeTemplate[]
     */
    public $ecsResources;

    /**
     * @description The Elastic IP Address (EIP) configurations of the service.
     *
     * @var eipResource
     */
    public $eipResource;
    protected $_name = [
        'ecsResources' => 'EcsResources',
        'eipResource'  => 'EipResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsResources) {
            $res['EcsResources'] = [];
            if (null !== $this->ecsResources && \is_array($this->ecsResources)) {
                $n = 0;
                foreach ($this->ecsResources as $item) {
                    $res['EcsResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eipResource) {
            $res['EipResource'] = null !== $this->eipResource ? $this->eipResource->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcesSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsResources'])) {
            if (!empty($map['EcsResources'])) {
                $model->ecsResources = [];
                $n                   = 0;
                foreach ($map['EcsResources'] as $item) {
                    $model->ecsResources[$n++] = null !== $item ? AddonNodeTemplate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EipResource'])) {
            $model->eipResource = eipResource::fromMap($map['EipResource']);
        }

        return $model;
    }
}
