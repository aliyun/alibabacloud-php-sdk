<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\ListInstanceResponseBody;

use AlibabaCloud\SDK\Ots\V20160620\Models\ListInstanceResponseBody\instanceInfos\instanceInfo;
use AlibabaCloud\Tea\Model;

class instanceInfos extends Model
{
    /**
     * @var instanceInfo[]
     */
    public $instanceInfo;
    protected $_name = [
        'instanceInfo' => 'InstanceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = [];
            if (null !== $this->instanceInfo && \is_array($this->instanceInfo)) {
                $n = 0;
                foreach ($this->instanceInfo as $item) {
                    $res['InstanceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceInfo'])) {
            if (!empty($map['InstanceInfo'])) {
                $model->instanceInfo = [];
                $n                   = 0;
                foreach ($map['InstanceInfo'] as $item) {
                    $model->instanceInfo[$n++] = null !== $item ? instanceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
