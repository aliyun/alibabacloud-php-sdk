<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelRequest\auditHotelReq;
use AlibabaCloud\Tea\Model;

class AuditHotelRequest extends Model
{
    /**
     * @var auditHotelReq
     */
    public $auditHotelReq;
    protected $_name = [
        'auditHotelReq' => 'AuditHotelReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditHotelReq) {
            $res['AuditHotelReq'] = null !== $this->auditHotelReq ? $this->auditHotelReq->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditHotelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditHotelReq'])) {
            $model->auditHotelReq = auditHotelReq::fromMap($map['AuditHotelReq']);
        }

        return $model;
    }
}
