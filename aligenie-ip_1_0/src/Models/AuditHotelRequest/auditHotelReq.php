<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\AuditHotelRequest;

use AlibabaCloud\Dara\Model;

class auditHotelReq extends Model
{
    /**
     * @var string
     */
    public $auditOpinion;

    /**
     * @var string
     */
    public $hotelId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'auditOpinion' => 'AuditOpinion',
        'hotelId' => 'HotelId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
