<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ColumnStatisticsDesc extends Model
{
    /**
     * @var int
     */
    public $lastAnalyzedTime;

    /**
     * @var string
     */
    public $partitionName;
    protected $_name = [
        'lastAnalyzedTime' => 'LastAnalyzedTime',
        'partitionName'    => 'PartitionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastAnalyzedTime) {
            $res['LastAnalyzedTime'] = $this->lastAnalyzedTime;
        }
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ColumnStatisticsDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastAnalyzedTime'])) {
            $model->lastAnalyzedTime = $map['LastAnalyzedTime'];
        }
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }

        return $model;
    }
}
