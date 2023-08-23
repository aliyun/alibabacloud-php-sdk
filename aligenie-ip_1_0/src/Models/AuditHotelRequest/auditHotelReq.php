<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelRequest;

use AlibabaCloud\Tea\Model;

class auditHotelReq extends Model
{
    /**
     * @example 同意
     *
     * @var string
     */
    public $auditOpinion;

    /**
     * @example 80d84ea8ed9e422fbad52715c8fc56f1
     *
     * @var string
     */
    public $hotelId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'auditOpinion' => 'AuditOpinion',
        'hotelId'      => 'HotelId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditOpinion) {
            $res['AuditOpinion'] = $this->auditOpinion;
        }
        if (null !== $this->hotelId) {
            $res['HotelId'] = $this->hotelId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditHotelReq
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditOpinion'])) {
            $model->auditOpinion = $map['AuditOpinion'];
        }
        if (isset($map['HotelId'])) {
            $model->hotelId = $map['HotelId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
