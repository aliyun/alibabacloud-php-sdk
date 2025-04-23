<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest;

use AlibabaCloud\Dara\Model;

class addr extends Model
{
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
    public $value;
    protected $_name = [
        'lbaWeight' => 'LbaWeight',
        'mode' => 'Mode',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lbaWeight) {
            $res['LbaWeight'] = $this->lbaWeight;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['LbaWeight'])) {
            $model->lbaWeight = $map['LbaWeight'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
