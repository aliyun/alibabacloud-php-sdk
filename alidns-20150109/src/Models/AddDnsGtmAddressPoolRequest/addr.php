<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest;

use AlibabaCloud\Dara\Model;

class addr extends Model
{
    /**
     * @var string
     */
    public $addr;
    /**
     * @var string
     */
    public $attributeInfo;
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
    protected $_name = [
        'addr'          => 'Addr',
        'attributeInfo' => 'AttributeInfo',
        'lbaWeight'     => 'LbaWeight',
        'mode'          => 'Mode',
        'remark'        => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
