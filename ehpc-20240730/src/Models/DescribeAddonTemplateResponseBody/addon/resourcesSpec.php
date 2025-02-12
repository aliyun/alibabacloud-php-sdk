<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\AddonNodeTemplate;
use AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\resourcesSpec\eipResource;

class resourcesSpec extends Model
{
    /**
     * @var AddonNodeTemplate[]
     */
    public $ecsResources;
    /**
     * @var eipResource
     */
    public $eipResource;
    protected $_name = [
        'ecsResources' => 'EcsResources',
        'eipResource'  => 'EipResource',
    ];

    public function validate()
    {
        if (\is_array($this->ecsResources)) {
            Model::validateArray($this->ecsResources);
        }
        if (null !== $this->eipResource) {
            $this->eipResource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsResources) {
            if (\is_array($this->ecsResources)) {
                $res['EcsResources'] = [];
                $n1                  = 0;
                foreach ($this->ecsResources as $item1) {
                    $res['EcsResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->eipResource) {
            $res['EipResource'] = null !== $this->eipResource ? $this->eipResource->toArray($noStream) : $this->eipResource;
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
        if (isset($map['EcsResources'])) {
            if (!empty($map['EcsResources'])) {
                $model->ecsResources = [];
                $n1                  = 0;
                foreach ($map['EcsResources'] as $item1) {
                    $model->ecsResources[$n1++] = AddonNodeTemplate::fromMap($item1);
                }
            }
        }

        if (isset($map['EipResource'])) {
            $model->eipResource = eipResource::fromMap($map['EipResource']);
        }

        return $model;
    }
}
