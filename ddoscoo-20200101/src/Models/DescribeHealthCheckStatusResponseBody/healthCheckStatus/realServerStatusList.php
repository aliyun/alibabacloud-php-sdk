<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeHealthCheckStatusResponseBody\healthCheckStatus;

use AlibabaCloud\Tea\Model;

class realServerStatusList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $address;
    protected $_name = [
        'status'  => 'Status',
        'address' => 'Address',
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
        if (null !== $this->address) {
            $res['Address'] = $this->address;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        return $model;
    }
}
