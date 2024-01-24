<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyRdsReadWeightRequest extends Model
{
    /**
     * @description The name of the database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The ID of the PolarDB-X 1.0 instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The names of the ApsaraDB RDS for MySQL instances. Separate the names with commas (,).
     *
     * @example rm-****************,rm-****************
     *
     * @var string
     */
    public $instanceNames;

    /**
     * @description The weights of the ApsaraDB RDS for MySQL instances. Separate the weights with commas (,).
     *
     * @example 14,86
     *
     * @var string
     */
    public $weights;
    protected $_name = [
        'dbName'         => 'DbName',
        'drdsInstanceId' => 'DrdsInstanceId',
        'instanceNames'  => 'InstanceNames',
        'weights'        => 'Weights',
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
        if (null !== $this->instanceNames) {
            $res['InstanceNames'] = $this->instanceNames;
        }
        if (null !== $this->weights) {
            $res['Weights'] = $this->weights;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyRdsReadWeightRequest
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
        if (isset($map['InstanceNames'])) {
            $model->instanceNames = $map['InstanceNames'];
        }
        if (isset($map['Weights'])) {
            $model->weights = $map['Weights'];
        }

        return $model;
    }
}
