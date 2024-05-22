<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest;

use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @description The address in the address pool.
     *
     * This parameter is required.
     * @example 1.1.1.1
     *
     * @var string
     */
    public $addr;

    /**
     * @description The information about the source region of the address. The value of this parameter is a JSON string. Valid values:
     *
     *   LineCode: the line code of the source region for the address
     *
     *   lineCodeRectifyType: the rectification type of the line code. Default value: AUTO. Valid values:
     *
     *   NO_NEED: no need for rectification
     *   RECTIFIED: rectified
     *   AUTO: automatic rectification
     *
     * This parameter is required.
     * @example default
     *
     * @var string
     */
    public $attributeInfo;

    /**
     * @description The weight of the address pool.
     *
     * @example 1
     *
     * @var int
     */
    public $lbaWeight;

    /**
     * @description The return mode of the addresses: Valid values:
     *
     *   SMART: smart return
     *   ONLINE: always online
     *   OFFLINE: always offline
     *
     * This parameter is required.
     * @example online
     *
     * @var string
     */
    public $mode;

    /**
     * @description The remarks.
     *
     * @example test
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'addr'          => 'Addr',
        'attributeInfo' => 'AttributeInfo',
        'lbaWeight'     => 'LbaWeight',
        'mode'          => 'Mode',
        'remark'        => 'Remark',
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
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
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
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
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

        return $model;
    }
}
