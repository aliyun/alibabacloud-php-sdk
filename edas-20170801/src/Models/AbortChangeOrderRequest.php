<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class AbortChangeOrderRequest extends Model
{
    /**
     * @description The ID of the change process. You can call the [GetChangeOrderInfo](~~62072~~) operation to query the change process ID.
     *
     * @example 4f038ddf-b27b-****-****-88e44375****
     *
     * @var string
     */
    public $changeOrderId;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbortChangeOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }

        return $model;
    }
}
