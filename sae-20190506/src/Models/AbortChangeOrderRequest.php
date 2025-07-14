<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class AbortChangeOrderRequest extends Model
{
    /**
     * @description The ID of the change order.
     *
     * This parameter is required.
     *
     * @example be2e1c76-682b-4897-98d3-1d8d6478****
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @var bool
     */
    public $rollback;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
        'rollback' => 'Rollback',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->rollback) {
            $res['Rollback'] = $this->rollback;
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
        if (isset($map['Rollback'])) {
            $model->rollback = $map['Rollback'];
        }

        return $model;
    }
}
