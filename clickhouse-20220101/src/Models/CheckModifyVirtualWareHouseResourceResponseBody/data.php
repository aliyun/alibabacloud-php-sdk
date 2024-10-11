<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\CheckModifyVirtualWareHouseResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ResourceChanging
     *
     * @var string
     */
    public $expectedDBClusterStatus;

    /**
     * @example 60
     *
     * @var int
     */
    public $expectedOrderFinishSeconds;

    /**
     * @example ResourceChanging
     *
     * @var string
     */
    public $expectedTargetVirtualWareHouseStatus;
    protected $_name = [
        'expectedDBClusterStatus'              => 'ExpectedDBClusterStatus',
        'expectedOrderFinishSeconds'           => 'ExpectedOrderFinishSeconds',
        'expectedTargetVirtualWareHouseStatus' => 'ExpectedTargetVirtualWareHouseStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expectedDBClusterStatus) {
            $res['ExpectedDBClusterStatus'] = $this->expectedDBClusterStatus;
        }
        if (null !== $this->expectedOrderFinishSeconds) {
            $res['ExpectedOrderFinishSeconds'] = $this->expectedOrderFinishSeconds;
        }
        if (null !== $this->expectedTargetVirtualWareHouseStatus) {
            $res['ExpectedTargetVirtualWareHouseStatus'] = $this->expectedTargetVirtualWareHouseStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpectedDBClusterStatus'])) {
            $model->expectedDBClusterStatus = $map['ExpectedDBClusterStatus'];
        }
        if (isset($map['ExpectedOrderFinishSeconds'])) {
            $model->expectedOrderFinishSeconds = $map['ExpectedOrderFinishSeconds'];
        }
        if (isset($map['ExpectedTargetVirtualWareHouseStatus'])) {
            $model->expectedTargetVirtualWareHouseStatus = $map['ExpectedTargetVirtualWareHouseStatus'];
        }

        return $model;
    }
}
