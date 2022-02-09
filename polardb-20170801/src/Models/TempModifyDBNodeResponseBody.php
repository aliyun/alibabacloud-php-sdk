<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class TempModifyDBNodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string[]
     */
    public $DBNodeIds;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'DBNodeIds'   => 'DBNodeIds',
        'orderId'     => 'OrderId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBNodeIds) {
            $res['DBNodeIds'] = $this->DBNodeIds;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TempModifyDBNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBNodeIds'])) {
            if (!empty($map['DBNodeIds'])) {
                $model->DBNodeIds = $map['DBNodeIds'];
            }
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
