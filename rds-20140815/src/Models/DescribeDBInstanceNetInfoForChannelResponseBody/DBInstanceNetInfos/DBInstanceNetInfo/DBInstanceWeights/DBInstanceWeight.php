<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoForChannelResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights;

use AlibabaCloud\Tea\Model;

class DBInstanceWeight extends Model
{
    /**
     * @description The availability of the instance. Valid values:
     *
     *   **Unavailable**
     *   **Available**
     *
     * @example Unavailable
     *
     * @var string
     */
    public $availability;

    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The instance type. Valid values:
     *
     *   **Master**: primary instance
     *   **Readonly**: read-only instance
     *
     * @example Master
     *
     * @var string
     */
    public $DBInstanceType;

    /**
     * @description The weight of the instance.
     *
     * @example 100
     *
     * @var string
     */
    public $weight;
    protected $_name = [
        'availability'   => 'Availability',
        'DBInstanceId'   => 'DBInstanceId',
        'DBInstanceType' => 'DBInstanceType',
        'weight'         => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availability) {
            $res['Availability'] = $this->availability;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceWeight
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Availability'])) {
            $model->availability = $map['Availability'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
