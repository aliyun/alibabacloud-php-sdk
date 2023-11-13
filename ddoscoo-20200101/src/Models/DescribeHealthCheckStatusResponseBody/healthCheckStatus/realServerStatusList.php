<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusResponseBody\healthCheckStatus;

use AlibabaCloud\Tea\Model;

class realServerStatusList extends Model
{
    /**
     * @description The IP address of the origin server.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The health state of the IP address. Valid values:
     *
     *   **normal**: healthy
     *   **abnormal**: unhealthy
     *
     * @example abnormal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'address' => 'Address',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realServerStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
