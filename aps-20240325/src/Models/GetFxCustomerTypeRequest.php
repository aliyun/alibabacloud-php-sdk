<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aps\V20240325\Models;

use AlibabaCloud\Tea\Model;

class GetFxCustomerTypeRequest extends Model
{
    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'uid' => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFxCustomerTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
