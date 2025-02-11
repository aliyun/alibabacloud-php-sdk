<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClustersResponseBody\items\DBCluster;

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
        if (\is_array($this->DBCluster)) {
            Model::validateArray($this->DBCluster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBCluster) {
            if (\is_array($this->DBCluster)) {
                $res['DBCluster'] = [];
                $n1               = 0;
                foreach ($this->DBCluster as $item1) {
                    $res['DBCluster'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBCluster'])) {
            if (!empty($map['DBCluster'])) {
                $model->DBCluster = [];
                $n1               = 0;
                foreach ($map['DBCluster'] as $item1) {
                    $model->DBCluster[$n1++] = DBCluster::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
