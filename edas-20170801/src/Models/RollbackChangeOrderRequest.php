<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class RollbackChangeOrderRequest extends Model
{
    /**
     * @description The ID of the change process.
     *
     * @example dc5133d7-773f-4c81-****-e2103dce****
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
     * @return RollbackChangeOrderRequest
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
