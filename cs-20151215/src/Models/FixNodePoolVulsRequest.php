<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\FixNodePoolVulsRequest\rolloutPolicy;
use AlibabaCloud\Tea\Model;

class FixNodePoolVulsRequest extends Model
{
    /**
     * @var string[]
     */
    public $nodes;

    /**
     * @var rolloutPolicy
     */
    public $rolloutPolicy;

    /**
     * @var string[]
     */
    public $vuls;
    protected $_name = [
        'nodes'         => 'nodes',
        'rolloutPolicy' => 'rollout_policy',
        'vuls'          => 'vuls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodes) {
            $res['nodes'] = $this->nodes;
        }
        if (null !== $this->rolloutPolicy) {
            $res['rollout_policy'] = null !== $this->rolloutPolicy ? $this->rolloutPolicy->toMap() : null;
        }
        if (null !== $this->vuls) {
            $res['vuls'] = $this->vuls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FixNodePoolVulsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = $map['nodes'];
            }
        }
        if (isset($map['rollout_policy'])) {
            $model->rolloutPolicy = rolloutPolicy::fromMap($map['rollout_policy']);
        }
        if (isset($map['vuls'])) {
            if (!empty($map['vuls'])) {
                $model->vuls = $map['vuls'];
            }
        }

        return $model;
    }
}
