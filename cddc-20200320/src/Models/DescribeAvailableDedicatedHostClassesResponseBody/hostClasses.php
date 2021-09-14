<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostClassesResponseBody;

use AlibabaCloud\Tea\Model;

class hostClasses extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostClassesResponseBody\hostClasses\hostClasses[]
     */
    public $hostClasses;
    protected $_name = [
        'hostClasses' => 'HostClasses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostClasses) {
            $res['HostClasses'] = [];
            if (null !== $this->hostClasses && \is_array($this->hostClasses)) {
                $n = 0;
                foreach ($this->hostClasses as $item) {
                    $res['HostClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostClasses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostClasses'])) {
            if (!empty($map['HostClasses'])) {
                $model->hostClasses = [];
                $n                  = 0;
                foreach ($map['HostClasses'] as $item) {
                    $model->hostClasses[$n++] = null !== $item ? \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeAvailableDedicatedHostClassesResponseBody\hostClasses\hostClasses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
