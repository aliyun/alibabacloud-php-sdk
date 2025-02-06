<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeProcessListResponseBody\data\resultSet;

class data extends Model
{
    /**
     * @var int
     */
    public $DBInstanceID;
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var resultSet[]
     */
    public $resultSet;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBInstanceID'   => 'DBInstanceID',
        'DBInstanceName' => 'DBInstanceName',
        'resultSet'      => 'ResultSet',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->resultSet)) {
            Model::validateArray($this->resultSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceID) {
            $res['DBInstanceID'] = $this->DBInstanceID;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->resultSet) {
            if (\is_array($this->resultSet)) {
                $res['ResultSet'] = [];
                $n1               = 0;
                foreach ($this->resultSet as $item1) {
                    $res['ResultSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1               = 0;
                foreach ($map['ResultSet'] as $item1) {
                    $model->resultSet[$n1++] = resultSet::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
