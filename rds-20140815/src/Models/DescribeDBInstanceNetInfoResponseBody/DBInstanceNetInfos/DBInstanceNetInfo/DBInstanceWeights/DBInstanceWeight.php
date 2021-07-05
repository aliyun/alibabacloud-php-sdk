<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos\DBInstanceNetInfo\DBInstanceWeights;

use AlibabaCloud\Tea\Model;

class DBInstanceWeight extends Model
{
    /**
     * @var string
     */
    public $availability;

    /**
     * @var string
     */
    public $weight;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $DBInstanceType;
    protected $_name = [
        'availability'   => 'Availability',
        'weight'         => 'Weight',
        'DBInstanceId'   => 'DBInstanceId',
        'role'           => 'Role',
        'DBInstanceType' => 'DBInstanceType',
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }

        return $model;
    }
}
