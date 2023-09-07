<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeAITaskStatusResponseBody extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example pc-xxxxxxxxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The request ID.
     *
     * @example 9B7BFB11-C077-4FE3-B051-F69CEB******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of the PolarDB for AI feature. Valid values:
     *
     *   **1**: The feature is enabled.
     *   **2**: The feature is disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The state description of the PolarDB for AI feature.
     *
     * @var string
     */
    public $statusName;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
        'statusName'  => 'StatusName',
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
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAITaskStatusResponseBody
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
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }

        return $model;
    }
}
