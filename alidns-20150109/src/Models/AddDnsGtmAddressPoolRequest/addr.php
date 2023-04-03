<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest;

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
     * @description The source region of the address. The value is a JSON string.
     *
     *   lineCode: the line code of the source region of the address.
     *
     *   lineCodeRectifyType: the rectification type of the line code. Default value: AUTO. Valid values:
     *
     *   NO_NEED: no need for rectification
     *   RECTIFIED: rectified
     *   AUTO: automatic rectification
     *
     * @example default
     *
     * @var string
     */
    public $attributeInfo;

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
