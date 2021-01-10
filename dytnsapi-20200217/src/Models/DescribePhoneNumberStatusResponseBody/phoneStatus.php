<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\DescribePhoneNumberStatusResponseBody;

use AlibabaCloud\Tea\Model;

class phoneStatus extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $serialId;

    /**
     * @var string
     */
    public $carrier;
    protected $_name = [
        'status'   => 'Status',
        'serialId' => 'SerialId',
        'carrier'  => 'Carrier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->serialId) {
            $res['SerialId'] = $this->serialId;
        }
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SerialId'])) {
            $model->serialId = $map['SerialId'];
        }
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }

        return $model;
    }
}
