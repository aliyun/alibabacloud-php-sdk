<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights\DBInstanceWeight;
use AlibabaCloud\Tea\Model;

class DBInstanceWeights extends Model
{
    /**
     * @var DBInstanceWeight[]
     */
    public $DBInstanceWeight;
    protected $_name = [
        'DBInstanceWeight' => 'DBInstanceWeight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceWeight) {
            $res['DBInstanceWeight'] = [];
            if (null !== $this->DBInstanceWeight && \is_array($this->DBInstanceWeight)) {
                $n = 0;
                foreach ($this->DBInstanceWeight as $item) {
                    $res['DBInstanceWeight'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceWeights
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceWeight'])) {
            if (!empty($map['DBInstanceWeight'])) {
                $model->DBInstanceWeight = [];
                $n                       = 0;
                foreach ($map['DBInstanceWeight'] as $item) {
                    $model->DBInstanceWeight[$n++] = null !== $item ? DBInstanceWeight::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
