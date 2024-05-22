<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceAddressPoolResponseBody\addrs;

use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @description The address.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $addr;

    /**
     * @description The status of the last health check on the address. Valid values:
     *
     *   OK: No active alerts are triggered.
     *   ALERT: Alerts are triggered based on the alert rules.
     *
     * @example ok
     *
     * @var string
     */
    public $alertStatus;

    /**
     * @description The source region of the address.
     *
     *   lineCode: the line code of the source region of the address. This parameter is deprecated, and lineCodes prevails.
     *   lineName: the line name of the source region of the address. This parameter is deprecated.
     *   lineCodes: the line codes of the source regions of the address.
     *
     * @example "lineCode":"aliyun_r_cn-zhangjiakou", "lineName": "Alibaba Cloud_China (Zhangjiakou)", "lineCodes": ["aliyun_r_cn-zhangjiakou"]
     *
     * @var string
     */
    public $attributeInfo;

    /**
     * @description The time when the address was added into the address pool.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp that indicates the time when the address was added into the address pool.
     *
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
     *   SMART: smart return
     *   ONLINE: always online
     *   OFFLINE: always offline
     *
     * @example online
     *
     * @var string
     */
    public $mode;

    /**
     * @description The description of the address.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The time when the address was last updated.
     *
     * @example 2017-12-28T13:08Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The timestamp that indicates the time when the address was last updated.
     *
     * @example 1527690629357
     *
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'addr'            => 'Addr',
        'alertStatus'     => 'AlertStatus',
        'attributeInfo'   => 'AttributeInfo',
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'lbaWeight'       => 'LbaWeight',
        'mode'            => 'Mode',
        'remark'          => 'Remark',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }
        if (null !== $this->alertStatus) {
            $res['AlertStatus'] = $this->alertStatus;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }
        if (isset($map['AlertStatus'])) {
            $model->alertStatus = $map['AlertStatus'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }

        return $model;
    }
}
