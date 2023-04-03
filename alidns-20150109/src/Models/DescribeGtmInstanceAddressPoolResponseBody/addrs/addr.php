<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstanceAddressPoolResponseBody\addrs;

use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @description The ID of the address.
     *
     * @example 123
     *
     * @var int
     */
    public $addrId;

    /**
     * @description Indicates whether health check was enabled for the address. Valid values:
     *
     *   **OK**: Normal
     *   **ALERT**: Alert
     *
     * @example OK
     *
     * @var string
     */
    public $alertStatus;

    /**
     * @description The time when the address pool was created.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1527690629357
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The weight of the address.
     *
     * @example 1
     *
     * @var int
     */
    public $lbaWeight;

    /**
     * @description The mode of the address. Valid values:
     *
     *   **SMART**: Intelligent return
     *   **ONLINE**: Always online
     *   **OFFLINE**: Always offline
     *
     * @example SMART
     *
     * @var string
     */
    public $mode;

    /**
     * @description The last time when the address was updated.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description A timestamp that indicates the last time when the address was updated.
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The address.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'addrId'          => 'AddrId',
        'alertStatus'     => 'AlertStatus',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'lbaWeight'       => 'LbaWeight',
        'mode'            => 'Mode',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrId) {
            $res['AddrId'] = $this->addrId;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->lbaWeight) {
            $res['LbaWeight'] = $this->lbaWeight;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrId'])) {
            $model->addrId = $map['AddrId'];
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
