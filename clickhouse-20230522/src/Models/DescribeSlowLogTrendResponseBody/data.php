<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeSlowLogTrendResponseBody\data\resultSet;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example cc-bp100p4q1g9z3****
     *
     * @var int
     */
    public $DBInstanceID;

    /**
     * @description The cluster name.
     *
     * @example clusterTest
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The result sets.
     *
     * @var resultSet[]
     */
    public $resultSet;
    protected $_name = [
        'DBInstanceID' => 'DBInstanceID',
        'DBInstanceName' => 'DBInstanceName',
        'resultSet' => 'ResultSet',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->resultSet) {
            $res['ResultSet'] = [];
            if (null !== $this->resultSet && \is_array($this->resultSet)) {
                $n = 0;
                foreach ($this->resultSet as $item) {
                    $res['ResultSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceID'])) {
            $model->DBInstanceID = $map['DBInstanceID'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['ResultSet'])) {
            if (!empty($map['ResultSet'])) {
                $model->resultSet = [];
                $n = 0;
                foreach ($map['ResultSet'] as $item) {
                    $model->resultSet[$n++] = null !== $item ? resultSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
