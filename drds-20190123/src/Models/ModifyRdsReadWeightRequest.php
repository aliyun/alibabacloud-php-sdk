<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyRdsReadWeightRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $instanceNames;

    /**
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
