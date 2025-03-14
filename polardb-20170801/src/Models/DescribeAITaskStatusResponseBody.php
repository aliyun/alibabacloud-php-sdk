<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeAITaskStatusResponseBody extends Model
{
    /**
     * @description The name of the database account that is used to connect to the AI nodes in the cluster.
     *
     * @example testacc
     *
     * @var string
     */
    public $accountName;

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
     * @description The status of the PolarDB for AI feature. Valid values:
     *
     *   **1**: enabled.
     *   **2**: disabled.
     *
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @description The description of the status of the PolarDB for AI feature.
     *
     * @example Closed State
     *
     * @var string
     */
    public $statusName;
    protected $_name = [
        'accountName' => 'AccountName',
        'DBClusterId' => 'DBClusterId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'statusName' => 'StatusName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
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
