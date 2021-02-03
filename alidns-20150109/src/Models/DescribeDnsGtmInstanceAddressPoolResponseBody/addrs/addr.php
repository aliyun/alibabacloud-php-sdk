<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponseBody\addrs;

use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $attributeInfo;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $alertStatus;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $lbaWeight;

    /**
     * @var string
     */
    public $addr;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $createTimestamp;
    protected $_name = [
        'updateTimestamp' => 'UpdateTimestamp',
        'attributeInfo'   => 'AttributeInfo',
        'updateTime'      => 'UpdateTime',
        'alertStatus'     => 'AlertStatus',
        'remark'          => 'Remark',
        'lbaWeight'       => 'LbaWeight',
        'addr'            => 'Addr',
        'createTime'      => 'CreateTime',
        'mode'            => 'Mode',
        'createTimestamp' => 'CreateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->lbaWeight) {
            $res['LbaWeight'] = $this->lbaWeight;
        }
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        return $model;
    }
}
