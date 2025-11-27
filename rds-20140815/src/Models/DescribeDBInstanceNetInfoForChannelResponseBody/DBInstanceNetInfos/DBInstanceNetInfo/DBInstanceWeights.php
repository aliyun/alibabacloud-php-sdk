<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights\DBInstanceWeight;

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
        if (\is_array($this->DBInstanceWeight)) {
            Model::validateArray($this->DBInstanceWeight);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceWeight) {
            if (\is_array($this->DBInstanceWeight)) {
                $res['DBInstanceWeight'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceWeight as $item1) {
                    $res['DBInstanceWeight'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceWeight'])) {
            if (!empty($map['DBInstanceWeight'])) {
                $model->DBInstanceWeight = [];
                $n1 = 0;
                foreach ($map['DBInstanceWeight'] as $item1) {
                    $model->DBInstanceWeight[$n1] = DBInstanceWeight::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
