<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody\DBClustersNetInfos;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;

class DescribeDBInstanceNetInfoResponseBody extends Model
{
    /**
     * @var DBClustersNetInfos[]
     */
    public $DBClustersNetInfos;
    /**
     * @var DBInstanceNetInfos[]
     */
    public $DBInstanceNetInfos;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClustersNetInfos' => 'DBClustersNetInfos',
        'DBInstanceNetInfos' => 'DBInstanceNetInfos',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DBClustersNetInfos)) {
            Model::validateArray($this->DBClustersNetInfos);
        }
        if (\is_array($this->DBInstanceNetInfos)) {
            Model::validateArray($this->DBInstanceNetInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClustersNetInfos) {
            if (\is_array($this->DBClustersNetInfos)) {
                $res['DBClustersNetInfos'] = [];
                $n1                        = 0;
                foreach ($this->DBClustersNetInfos as $item1) {
                    $res['DBClustersNetInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->DBInstanceNetInfos) {
            if (\is_array($this->DBInstanceNetInfos)) {
                $res['DBInstanceNetInfos'] = [];
                $n1                        = 0;
                foreach ($this->DBInstanceNetInfos as $item1) {
                    $res['DBInstanceNetInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBClustersNetInfos'])) {
            if (!empty($map['DBClustersNetInfos'])) {
                $model->DBClustersNetInfos = [];
                $n1                        = 0;
                foreach ($map['DBClustersNetInfos'] as $item1) {
                    $model->DBClustersNetInfos[$n1++] = DBClustersNetInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['DBInstanceNetInfos'])) {
            if (!empty($map['DBInstanceNetInfos'])) {
                $model->DBInstanceNetInfos = [];
                $n1                        = 0;
                foreach ($map['DBInstanceNetInfos'] as $item1) {
                    $model->DBInstanceNetInfos[$n1++] = DBInstanceNetInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
