<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel\typeModels\typeModel\instanceModels;

use AlibabaCloud\Tea\Model;

class instanceModel extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createdTime'      => 'CreatedTime',
        'DBInstanceId'     => 'DBInstanceId',
        'DBInstanceStatus' => 'DBInstanceStatus',
        'expireTime'       => 'ExpireTime',
        'payType'          => 'PayType',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
