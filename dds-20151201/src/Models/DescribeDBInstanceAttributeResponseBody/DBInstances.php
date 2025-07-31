<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance;
use AlibabaCloud\Tea\Model;

class DBInstances extends Model
{
    /**
     * @var DBInstance[]
     */
    public $DBInstance;
    protected $_name = [
        'DBInstance' => 'DBInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstance) {
            $res['DBInstance'] = [];
            if (null !== $this->DBInstance && \is_array($this->DBInstance)) {
                $n = 0;
                foreach ($this->DBInstance as $item) {
                    $res['DBInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstance'])) {
            if (!empty($map['DBInstance'])) {
                $model->DBInstance = [];
                $n = 0;
                foreach ($map['DBInstance'] as $item) {
                    $model->DBInstance[$n++] = null !== $item ? DBInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
