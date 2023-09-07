<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribePolarSQLCollectorPolicyResponseBody extends Model
{
    /**
     * @description The IDs of the clusters.
     *
     * @example pc-bp1s826a1up******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the request.
     *
     * @example 3655211B-4D74-4E13-91E6-FF2AFE******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the SQL Explorer feature is enabled. Valid values:
     *
     *   **Enable**
     *   **Disabled**
     *
     * @example Enable
     *
     * @var string
     */
    public $SQLCollectorStatus;
    protected $_name = [
        'DBClusterId'        => 'DBClusterId',
        'requestId'          => 'RequestId',
        'SQLCollectorStatus' => 'SQLCollectorStatus',
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
        if (null !== $this->SQLCollectorStatus) {
            $res['SQLCollectorStatus'] = $this->SQLCollectorStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolarSQLCollectorPolicyResponseBody
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
        if (isset($map['SQLCollectorStatus'])) {
            $model->SQLCollectorStatus = $map['SQLCollectorStatus'];
        }

        return $model;
    }
}
