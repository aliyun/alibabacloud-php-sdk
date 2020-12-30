<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListInstancesOfUserResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListInstancesOfUserResponseBody\instances\callCenterInstance;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var callCenterInstance[]
     */
    public $callCenterInstance;
    protected $_name = [
        'callCenterInstance' => 'CallCenterInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callCenterInstance) {
            $res['CallCenterInstance'] = [];
            if (null !== $this->callCenterInstance && \is_array($this->callCenterInstance)) {
                $n = 0;
                foreach ($this->callCenterInstance as $item) {
                    $res['CallCenterInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallCenterInstance'])) {
            if (!empty($map['CallCenterInstance'])) {
                $model->callCenterInstance = [];
                $n                         = 0;
                foreach ($map['CallCenterInstance'] as $item) {
                    $model->callCenterInstance[$n++] = null !== $item ? callCenterInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
