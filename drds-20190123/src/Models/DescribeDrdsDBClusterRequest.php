<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsDBClusterRequest extends Model
{
    /**
     * @description The ID of the PolarDB cluster.
     *
     * This parameter is required.
     * @example pc-*****************
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The name of the DRDS database.
     *
     * This parameter is required.
     * @example drds_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of a DRDS instance.
     *
     * This parameter is required.
     * @example drds*********
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
     * @return DescribeDrdsDBClusterRequest
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
