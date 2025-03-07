<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo;
use AlibabaCloud\Tea\Model;

class DBInstanceNetInfos extends Model
{
    /**
     * @var DBInstanceNetInfo[]
     */
    public $DBInstanceNetInfo;
    protected $_name = [
        'DBInstanceNetInfo' => 'DBInstanceNetInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceNetInfo) {
            $res['DBInstanceNetInfo'] = [];
            if (null !== $this->DBInstanceNetInfo && \is_array($this->DBInstanceNetInfo)) {
                $n = 0;
                foreach ($this->DBInstanceNetInfo as $item) {
                    $res['DBInstanceNetInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceNetInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceNetInfo'])) {
            if (!empty($map['DBInstanceNetInfo'])) {
                $model->DBInstanceNetInfo = [];
                $n                        = 0;
                foreach ($map['DBInstanceNetInfo'] as $item) {
                    $model->DBInstanceNetInfo[$n++] = null !== $item ? DBInstanceNetInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
