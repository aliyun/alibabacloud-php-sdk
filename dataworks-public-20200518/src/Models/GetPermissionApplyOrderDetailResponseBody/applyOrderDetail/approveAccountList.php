<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

use AlibabaCloud\Dara\Model;

class approveAccountList extends Model
{
    /**
     * @var string
     */
    public $baseId;
    protected $_name = [
        'baseId' => 'BaseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseId) {
            $res['BaseId'] = $this->baseId;
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
        if (isset($map['BaseId'])) {
            $model->baseId = $map['BaseId'];
        }

        return $model;
    }
}
