<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class GetTier2CouponApprovalDetailRequest extends Model
{
    /**
     * @var string
     */
    public $applicationSheetId;
    protected $_name = [
        'applicationSheetId' => 'ApplicationSheetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationSheetId) {
            $res['ApplicationSheetId'] = $this->applicationSheetId;
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
        if (isset($map['ApplicationSheetId'])) {
            $model->applicationSheetId = $map['ApplicationSheetId'];
        }

        return $model;
    }
}
