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
    public $DBInstanceType;

    /**
     * @var string
     */
    public $DBInstanceId;
    protected $_name = [
        'availability'   => 'Availability',
        'weight'         => 'Weight',
        'DBInstanceType' => 'DBInstanceType',
        'DBInstanceId'   => 'DBInstanceId',
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
        if (null !== $this->DBInstanceType) {
            $res['DBInstanceType'] = $this->DBInstanceType;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (isset($map['DBInstanceType'])) {
            $model->DBInstanceType = $map['DBInstanceType'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
