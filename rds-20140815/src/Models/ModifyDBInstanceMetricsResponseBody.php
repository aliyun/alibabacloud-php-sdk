<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceMetricsResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example pgm-bp1s1j103lo6****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the request.
     *
     * @example B55934BB-FFAA-5276-80A8-E0FDB12810B3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The application scope of this modification. Valid values:
     *
     *   **instance**: This modification is applied only to the current instance.
     *   **region**: This modification is applied to all ApsaraDB RDS for PostgreSQL instances that are equipped with the same type of storage media as the current instance in the region to which the current instance belongs.
     *
     * @example instance
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'requestId'    => 'RequestId',
        'scope'        => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
