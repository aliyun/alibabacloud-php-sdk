<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstanceResourcesResponseBody\helmRelease;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterAddonInstanceResourcesResponseBody\kubernetesObjects;

class ListClusterAddonInstanceResourcesResponseBody extends Model
{
    /**
     * @var helmRelease
     */
    public $helmRelease;

    /**
     * @var kubernetesObjects[]
     */
    public $kubernetesObjects;
    protected $_name = [
        'helmRelease' => 'helm_release',
        'kubernetesObjects' => 'kubernetes_objects',
    ];

    public function validate()
    {
        if (null !== $this->helmRelease) {
            $this->helmRelease->validate();
        }
        if (\is_array($this->kubernetesObjects)) {
            Model::validateArray($this->kubernetesObjects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->helmRelease) {
            $res['helm_release'] = null !== $this->helmRelease ? $this->helmRelease->toArray($noStream) : $this->helmRelease;
        }

        if (null !== $this->kubernetesObjects) {
            if (\is_array($this->kubernetesObjects)) {
                $res['kubernetes_objects'] = [];
                $n1 = 0;
                foreach ($this->kubernetesObjects as $item1) {
                    $res['kubernetes_objects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['helm_release'])) {
            $model->helmRelease = helmRelease::fromMap($map['helm_release']);
        }

        if (isset($map['kubernetes_objects'])) {
            if (!empty($map['kubernetes_objects'])) {
                $model->kubernetesObjects = [];
                $n1 = 0;
                foreach ($map['kubernetes_objects'] as $item1) {
                    $model->kubernetesObjects[$n1] = kubernetesObjects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
