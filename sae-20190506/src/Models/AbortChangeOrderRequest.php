<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class AbortChangeOrderRequest extends Model
{
    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
