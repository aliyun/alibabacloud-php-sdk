<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmAddressPoolRequest;

use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @description The weight of the address pool.
     *
     * @example 1
     *
     * @var int
     */
    public $lbaWeight;

    /**
     * @description The mode of the address pool. Valid values:
     *
     *   **SMART**: smart return
     *   **ONLINE**: always online
     *   **OFFLINE**: always offline
     *
     * @example SMART
     *
     * @var string
     */
    public $mode;

    /**
     * @description The address in the address pool.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'lbaWeight' => 'LbaWeight',
        'mode'      => 'Mode',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return addr
     */
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
