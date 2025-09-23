<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBClusterNetInfos\DBClusterNetInfo;

class DBClusterNetInfos extends Model
{
    /**
     * @var DBClusterNetInfo[]
     */
    public $DBClusterNetInfo;
    protected $_name = [
        'DBClusterNetInfo' => 'DBClusterNetInfo',
    ];

    public function validate()
    {
        if (\is_array($this->DBClusterNetInfo)) {
            Model::validateArray($this->DBClusterNetInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterNetInfo) {
            if (\is_array($this->DBClusterNetInfo)) {
                $res['DBClusterNetInfo'] = [];
                $n1 = 0;
                foreach ($this->DBClusterNetInfo as $item1) {
                    $res['DBClusterNetInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DBClusterNetInfo'])) {
            if (!empty($map['DBClusterNetInfo'])) {
                $model->DBClusterNetInfo = [];
                $n1 = 0;
                foreach ($map['DBClusterNetInfo'] as $item1) {
                    $model->DBClusterNetInfo[$n1] = DBClusterNetInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
