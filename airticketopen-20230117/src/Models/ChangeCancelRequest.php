<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class ChangeCancelRequest extends Model
{
    /**
     * @example 4988430***950
     *
     * @var int
     */
    public $changeOrderNum;
    protected $_name = [
        'changeOrderNum' => 'change_order_num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderNum) {
            $res['change_order_num'] = $this->changeOrderNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeCancelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['change_order_num'])) {
            $model->changeOrderNum = $map['change_order_num'];
        }

        return $model;
    }
}
