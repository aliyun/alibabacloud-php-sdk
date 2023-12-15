<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters\dataCenter\nodes;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @example 192.***.12.3
     *
     * @var string
     */
    public $address;

    /**
     * @example 54.4 MiB
     *
     * @var string
     */
    public $load;

    /**
     * @example UpNormal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'address' => 'Address',
        'load'    => 'Load',
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
        if (null !== $this->load) {
            $res['Load'] = $this->load;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Load'])) {
            $model->load = $map['Load'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
