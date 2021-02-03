<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest;

use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @var string
     */
    public $addr;

    /**
     * @var int
     */
    public $lbaWeight;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $attributeInfo;
    protected $_name = [
        'addr'          => 'Addr',
        'lbaWeight'     => 'LbaWeight',
        'mode'          => 'Mode',
        'remark'        => 'Remark',
        'attributeInfo' => 'AttributeInfo',
    ];

    public function validate()
    {
        Model::validateRequired('addr', $this->addr, true);
        Model::validateRequired('mode', $this->mode, true);
        Model::validateRequired('attributeInfo', $this->attributeInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
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
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
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
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }

        return $model;
    }
}
