<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\ListDedicatedClusterResponseBody\dedicatedClusterStatusList\dedicatedClusterStatus;
use AlibabaCloud\Tea\Model;

class dedicatedClusterStatusList extends Model
{
    /**
     * @var dedicatedClusterStatus[]
     */
    public $dedicatedClusterStatus;
    protected $_name = [
        'dedicatedClusterStatus' => 'DedicatedClusterStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedClusterStatus) {
            $res['DedicatedClusterStatus'] = [];
            if (null !== $this->dedicatedClusterStatus && \is_array($this->dedicatedClusterStatus)) {
                $n = 0;
                foreach ($this->dedicatedClusterStatus as $item) {
                    $res['DedicatedClusterStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedClusterStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedClusterStatus'])) {
            if (!empty($map['DedicatedClusterStatus'])) {
                $model->dedicatedClusterStatus = [];
                $n                             = 0;
                foreach ($map['DedicatedClusterStatus'] as $item) {
                    $model->dedicatedClusterStatus[$n++] = null !== $item ? dedicatedClusterStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
