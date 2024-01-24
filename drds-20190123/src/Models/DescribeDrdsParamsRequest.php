<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeDrdsParamsRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example drds_test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example DescribeDrdsParams
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The type of nodes whose parameters you want to query. Valid values:
     *
     *   **INSTANCE: the instance level.**
     *   **DB**: the database level.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $paramLevel;

    /**
     * @description The ID of the region where the PolarDB-X 1.0 instance is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'paramLevel'     => 'ParamLevel',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->paramLevel) {
            $res['ParamLevel'] = $this->paramLevel;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDrdsParamsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['ParamLevel'])) {
            $model->paramLevel = $map['ParamLevel'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
