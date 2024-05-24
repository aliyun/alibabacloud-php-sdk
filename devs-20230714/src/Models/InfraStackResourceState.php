<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class InfraStackResourceState extends Model
{
    /**
     * @var ResourceDrift[]
     */
    public $resourceDrifts;

    /**
     * @var ResourceDetail[]
     */
    public $resources;
    protected $_name = [
        'resourceDrifts' => 'resourceDrifts',
        'resources'      => 'resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceDrifts) {
            $res['resourceDrifts'] = [];
            if (null !== $this->resourceDrifts && \is_array($this->resourceDrifts)) {
                $n = 0;
                foreach ($this->resourceDrifts as $item) {
                    $res['resourceDrifts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resources) {
            $res['resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InfraStackResourceState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceDrifts'])) {
            if (!empty($map['resourceDrifts'])) {
                $model->resourceDrifts = [];
                $n                     = 0;
                foreach ($map['resourceDrifts'] as $item) {
                    $model->resourceDrifts[$n++] = null !== $item ? ResourceDrift::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? ResourceDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
