<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeClusterDashboardResponseBody\dashboard\dataCenters\dataCenter\nodes;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $load;
    protected $_name = [
        'status'  => 'Status',
        'address' => 'Address',
        'load'    => 'Load',
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
        if (null !== $this->load) {
            $res['Load'] = $this->load;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Load'])) {
            $model->load = $map['Load'];
        }

        return $model;
    }
}
