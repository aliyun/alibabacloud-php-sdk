<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateStatusResponseBody;

use AlibabaCloud\Tea\Model;

class certificateStatus extends Model
{
    /**
     * @description The date on which the certificate was revoked.
     *
     * >  This parameter is returned only when the value of the **Status** parameter is **revoked**. The value revoked indicates that the certificate is revoked.
     * @example 2021-01-01T00:00Z
     *
     * @var int
     */
    public $revokeTime;

    /**
     * @description The serial number of the certificate.
     *
     * @example b67e53ebcea9b77d65b0c3236646d715****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   **good**: The certificate is not revoked.
     *   **revoked**: The certificate is revoked.
     *   **unknown**: The server cannot determine the status of the certificate.
     *
     * @example good
     *
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
