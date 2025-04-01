<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\RollbackApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var bool
     */
    public $isNeedApproval;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
        'isNeedApproval' => 'IsNeedApproval',
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

        if (null !== $this->isNeedApproval) {
            $res['IsNeedApproval'] = $this->isNeedApproval;
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

        if (isset($map['IsNeedApproval'])) {
            $model->isNeedApproval = $map['IsNeedApproval'];
        }

        return $model;
    }
}
