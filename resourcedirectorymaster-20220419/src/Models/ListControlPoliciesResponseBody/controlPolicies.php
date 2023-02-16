<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPoliciesResponseBody;

use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListControlPoliciesResponseBody\controlPolicies\controlPolicy;
use AlibabaCloud\Tea\Model;

class controlPolicies extends Model
{
    /**
     * @var controlPolicy[]
     */
    public $controlPolicy;
    protected $_name = [
        'controlPolicy' => 'ControlPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlPolicy) {
            $res['ControlPolicy'] = [];
            if (null !== $this->controlPolicy && \is_array($this->controlPolicy)) {
                $n = 0;
                foreach ($this->controlPolicy as $item) {
                    $res['ControlPolicy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return controlPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlPolicy'])) {
            if (!empty($map['ControlPolicy'])) {
                $model->controlPolicy = [];
                $n                    = 0;
                foreach ($map['ControlPolicy'] as $item) {
                    $model->controlPolicy[$n++] = null !== $item ? controlPolicy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
