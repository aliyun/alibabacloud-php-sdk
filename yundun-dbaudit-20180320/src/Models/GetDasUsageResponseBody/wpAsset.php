<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody;

use AlibabaCloud\Tea\Model;

class wpAsset extends Model
{
    /**
     * @var int
     */
    public $avgTime;

    /**
     * @var string
     */
    public $dbName;
    protected $_name = [
        'avgTime' => 'AvgTime',
        'dbName'  => 'DbName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgTime) {
            $res['AvgTime'] = $this->avgTime;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wpAsset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgTime'])) {
            $model->avgTime = $map['AvgTime'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        return $model;
    }
}
