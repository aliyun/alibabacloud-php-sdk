<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools;

use AlibabaCloud\Tea\Model;

class addrs extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'value' => 'Value',
        'mode'  => 'Mode',
        'id'    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
