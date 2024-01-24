<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsDbInstanceRequest extends Model
{
    /**
     * @description The ID of the custom ApsaraDB RDS for MySQL instance that you want to query.
     *
     * @example rm-bp1t1mk5a5bdj****
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The name of the database.
     *
     * @example drds_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The name of the PolarDB-X 1.0 instance.
     *
     * @example drdshbga1138****
     *
     * @var string
     */
    public $drdsInstanceId;
    protected $_name = [
        'dbInstanceId'   => 'DbInstanceId',
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsDbInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }

        return $model;
    }
}
