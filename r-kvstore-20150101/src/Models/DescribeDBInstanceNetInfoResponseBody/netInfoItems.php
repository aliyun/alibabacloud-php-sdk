<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody\netInfoItems\instanceNetInfo;
use AlibabaCloud\Tea\Model;

class netInfoItems extends Model
{
    /**
     * @var instanceNetInfo[]
     */
    public $instanceNetInfo;
    protected $_name = [
        'instanceNetInfo' => 'InstanceNetInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceNetInfo) {
            $res['InstanceNetInfo'] = [];
            if (null !== $this->instanceNetInfo && \is_array($this->instanceNetInfo)) {
                $n = 0;
                foreach ($this->instanceNetInfo as $item) {
                    $res['InstanceNetInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfoItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceNetInfo'])) {
            if (!empty($map['InstanceNetInfo'])) {
                $model->instanceNetInfo = [];
                $n                      = 0;
                foreach ($map['InstanceNetInfo'] as $item) {
                    $model->instanceNetInfo[$n++] = null !== $item ? instanceNetInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
