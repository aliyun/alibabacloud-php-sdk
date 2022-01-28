<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeReservedResourceResponseBody\supportResources\supportResource;

use AlibabaCloud\Tea\Model;

class systemDiskSizes extends Model
{
    /**
     * @var string[]
     */
    public $systemDiskSize;
    protected $_name = [
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDiskSizes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDiskSize'])) {
            if (!empty($map['SystemDiskSize'])) {
                $model->systemDiskSize = $map['SystemDiskSize'];
            }
        }

        return $model;
    }
}
