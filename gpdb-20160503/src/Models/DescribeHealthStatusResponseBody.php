<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeHealthStatusResponseBody\status;
use AlibabaCloud\Tea\Model;

class DescribeHealthStatusResponseBody extends Model
{
    /**
     * @description The ID of instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the request.
     *
     * @example D97B4191-104D-10CE-8BC5-53**********
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried performance metrics. Each performance metric consists of the parameter name, status, and metric value. The metric information is returned only for the performance parameters specified by **Key**. For example, if you set **Key** to **adbpg_status**, only the metric information of **adbpg_status** is returned.
     *
     * For more information about performance parameters, see [Performance parameters](https://help.aliyun.com/document_detail/86943.html).
     * @example {"node_master_connection_status":{"Status":"healthy","Value":1.6}}
     *
     * @var status
     */
    public $status;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHealthStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
