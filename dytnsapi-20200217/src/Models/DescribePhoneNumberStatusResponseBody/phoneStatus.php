<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberStatusResponseBody;

use AlibabaCloud\Tea\Model;

class phoneStatus extends Model
{
    /**
     * @example CMCC
     *
     * @var string
     */
    public $carrier;

    /**
     * @example 1100000000000
     *
     * @var string
     */
    public $serialId;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'carrier'  => 'Carrier',
        'serialId' => 'SerialId',
        'status'   => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->serialId) {
            $res['SerialId'] = $this->serialId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phoneStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['SerialId'])) {
            $model->serialId = $map['SerialId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
