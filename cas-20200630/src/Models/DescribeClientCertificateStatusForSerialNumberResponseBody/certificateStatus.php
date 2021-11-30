<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusForSerialNumberResponseBody;

use AlibabaCloud\Tea\Model;

class certificateStatus extends Model
{
    /**
     * @var int
     */
    public $revokeTime;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'revokeTime'   => 'RevokeTime',
        'serialNumber' => 'SerialNumber',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->revokeTime) {
            $res['RevokeTime'] = $this->revokeTime;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RevokeTime'])) {
            $model->revokeTime = $map['RevokeTime'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
