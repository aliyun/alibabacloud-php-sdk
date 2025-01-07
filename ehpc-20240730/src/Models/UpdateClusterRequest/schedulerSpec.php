<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterRequest;

use AlibabaCloud\Tea\Model;

class schedulerSpec extends Model
{
    /**
     * @var bool
     */
    public $enableTopologyAwareness;
    protected $_name = [
        'enableTopologyAwareness' => 'EnableTopologyAwareness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTopologyAwareness) {
            $res['EnableTopologyAwareness'] = $this->enableTopologyAwareness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableTopologyAwareness'])) {
            $model->enableTopologyAwareness = $map['EnableTopologyAwareness'];
        }

        return $model;
    }
}
