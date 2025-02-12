<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterRequest;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTopologyAwareness) {
            $res['EnableTopologyAwareness'] = $this->enableTopologyAwareness;
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
        if (isset($map['EnableTopologyAwareness'])) {
            $model->enableTopologyAwareness = $map['EnableTopologyAwareness'];
        }

        return $model;
    }
}
