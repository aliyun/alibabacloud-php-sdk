<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class AuditHotelShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $auditHotelReqShrink;
    protected $_name = [
        'auditHotelReqShrink' => 'AuditHotelReq',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditHotelReqShrink) {
            $res['AuditHotelReq'] = $this->auditHotelReqShrink;
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
        if (isset($map['AuditHotelReq'])) {
            $model->auditHotelReqShrink = $map['AuditHotelReq'];
        }

        return $model;
    }
}
