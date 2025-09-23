<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterProxyResponseBody\childInstances;

class DescribeDBClusterProxyResponseBody extends Model
{
    /**
     * @var childInstances[]
     */
    public $childInstances;

    /**
     * @var string
     */
    public $DBProxyClusterId;

    /**
     * @var int
     */
    public $DBProxyClusterNum;

    /**
     * @var string
     */
    public $DBProxyClusterStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'childInstances' => 'ChildInstances',
        'DBProxyClusterId' => 'DBProxyClusterId',
        'DBProxyClusterNum' => 'DBProxyClusterNum',
        'DBProxyClusterStatus' => 'DBProxyClusterStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->childInstances)) {
            Model::validateArray($this->childInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childInstances) {
            if (\is_array($this->childInstances)) {
                $res['ChildInstances'] = [];
                $n1 = 0;
                foreach ($this->childInstances as $item1) {
                    $res['ChildInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBProxyClusterId) {
            $res['DBProxyClusterId'] = $this->DBProxyClusterId;
        }

        if (null !== $this->DBProxyClusterNum) {
            $res['DBProxyClusterNum'] = $this->DBProxyClusterNum;
        }

        if (null !== $this->DBProxyClusterStatus) {
            $res['DBProxyClusterStatus'] = $this->DBProxyClusterStatus;
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
        if (isset($map['ChildInstances'])) {
            if (!empty($map['ChildInstances'])) {
                $model->childInstances = [];
                $n1 = 0;
                foreach ($map['ChildInstances'] as $item1) {
                    $model->childInstances[$n1] = childInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBProxyClusterId'])) {
            $model->DBProxyClusterId = $map['DBProxyClusterId'];
        }

        if (isset($map['DBProxyClusterNum'])) {
            $model->DBProxyClusterNum = $map['DBProxyClusterNum'];
        }

        if (isset($map['DBProxyClusterStatus'])) {
            $model->DBProxyClusterStatus = $map['DBProxyClusterStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
