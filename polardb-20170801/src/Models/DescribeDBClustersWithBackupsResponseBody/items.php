<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersWithBackupsResponseBody\items\DBCluster;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var DBCluster[]
     */
    public $DBCluster;
    protected $_name = [
        'DBCluster' => 'DBCluster',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBCluster) {
            $res['DBCluster'] = [];
            if (null !== $this->DBCluster && \is_array($this->DBCluster)) {
                $n = 0;
                foreach ($this->DBCluster as $item) {
                    $res['DBCluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBCluster'])) {
            if (!empty($map['DBCluster'])) {
                $model->DBCluster = [];
                $n                = 0;
                foreach ($map['DBCluster'] as $item) {
                    $model->DBCluster[$n++] = null !== $item ? DBCluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
