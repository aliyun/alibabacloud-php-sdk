<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQAConfigResponseBody extends Model
{
    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     * >  You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
     * @example am-8vbyw9awuj141haf9
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the resource group.
     *
     * @example test_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The request ID.
     *
     * @example CBE843D8-964D-5EA3-9D31-822125611B6E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether short query acceleration (SQA) is enabled.
     *
     * @example off
     *
     * @var string
     */
    public $SQAStatus;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'groupName'   => 'GroupName',
        'requestId'   => 'RequestId',
        'SQAStatus'   => 'SQAStatus',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SQAStatus) {
            $res['SQAStatus'] = $this->SQAStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQAConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQAStatus'])) {
            $model->SQAStatus = $map['SQAStatus'];
        }

        return $model;
    }
}
