<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditHotelReqShrink) {
            $res['AuditHotelReq'] = $this->auditHotelReqShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditHotelShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditHotelReq'])) {
            $model->auditHotelReqShrink = $map['AuditHotelReq'];
        }

        return $model;
    }
}
