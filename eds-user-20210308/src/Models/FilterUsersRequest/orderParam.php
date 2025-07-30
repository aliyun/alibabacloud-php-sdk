<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\FilterUsersRequest;

use AlibabaCloud\Tea\Model;

class orderParam extends Model
{
    /**
     * @description The field that you want to sort by.
     *
     * Valid values:
     *
     *   EndUserId: the username.
     *   id: the ID of the primary key.
     *   gmt_created: the creation time.
     *
     * @example id
     *
     * @var string
     */
    public $orderField;

    /**
     * @description The direction of the sort.
     *
     * Valid values:
     *
     *   ASC: the ascending order.
     *   DESC (default): the descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $orderType;
    protected $_name = [
        'orderField' => 'OrderField',
        'orderType' => 'OrderType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        return $model;
    }
}
