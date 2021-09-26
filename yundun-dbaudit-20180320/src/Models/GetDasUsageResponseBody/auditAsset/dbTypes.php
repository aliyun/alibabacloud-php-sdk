<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\auditAsset;

use AlibabaCloud\Tea\Model;

class dbTypes extends Model
{
    /**
     * @var string
     */
    public $dbType;

    /**
     * @var int
     */
    public $dbCount;
    protected $_name = [
        'dbType'  => 'DbType',
        'dbCount' => 'DbCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbCount) {
            $res['DbCount'] = $this->dbCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbCount'])) {
            $model->dbCount = $map['DbCount'];
        }

        return $model;
    }
}
