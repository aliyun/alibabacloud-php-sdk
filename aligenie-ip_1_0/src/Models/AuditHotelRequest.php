<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelRequest\auditHotelReq;

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
        if (null !== $this->auditHotelReq) {
            $this->auditHotelReq->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditHotelReq) {
            $res['AuditHotelReq'] = null !== $this->auditHotelReq ? $this->auditHotelReq->toArray($noStream) : $this->auditHotelReq;
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
            $model->auditHotelReq = auditHotelReq::fromMap($map['AuditHotelReq']);
        }

        return $model;
    }
}
