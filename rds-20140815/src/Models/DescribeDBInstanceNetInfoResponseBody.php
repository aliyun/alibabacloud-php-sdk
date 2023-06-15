<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;
use AlibabaCloud\Tea\Model;

class DescribeDBInstanceNetInfoResponseBody extends Model
{
    /**
     * @description Details of the endpoints of the instance.
     *
     * @var DBInstanceNetInfos
     */
    public $DBInstanceNetInfos;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **Classic**: classic network
     *   **VPC**: virtual private cloud (VPC)
     *
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The ID of the request.
     *
     * @example 777C4593-8053-427B-99E2-105593277CAB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The whitelist mode of the instance. Valid values:
     *
     *   **normal**: standard whitelist mode
     *   **safety**: enhanced whitelist mode
     *
     * @example safety
     *
     * @var string
     */
    public $securityIPMode;
    protected $_name = [
        'DBInstanceNetInfos'  => 'DBInstanceNetInfos',
        'instanceNetworkType' => 'InstanceNetworkType',
        'requestId'           => 'RequestId',
        'securityIPMode'      => 'SecurityIPMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceNetInfos) {
            $res['DBInstanceNetInfos'] = null !== $this->DBInstanceNetInfos ? $this->DBInstanceNetInfos->toMap() : null;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityIPMode) {
            $res['SecurityIPMode'] = $this->securityIPMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceNetInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceNetInfos'])) {
            $model->DBInstanceNetInfos = DBInstanceNetInfos::fromMap($map['DBInstanceNetInfos']);
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityIPMode'])) {
            $model->securityIPMode = $map['SecurityIPMode'];
        }

        return $model;
    }
}
