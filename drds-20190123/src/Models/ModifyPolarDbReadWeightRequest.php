<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolarDbReadWeightRequest extends Model
{
    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbNodeIds;

    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $weights;
    protected $_name = [
        'dbInstanceId'   => 'DbInstanceId',
        'dbName'         => 'DbName',
        'dbNodeIds'      => 'DbNodeIds',
        'drdsInstanceId' => 'DrdsInstanceId',
        'weights'        => 'Weights',
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
        if (null !== $this->dbNodeIds) {
            $res['DbNodeIds'] = $this->dbNodeIds;
        }
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->weights) {
            $res['Weights'] = $this->weights;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPolarDbReadWeightRequest
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
        if (isset($map['DbNodeIds'])) {
            $model->dbNodeIds = $map['DbNodeIds'];
        }
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['Weights'])) {
            $model->weights = $map['Weights'];
        }

        return $model;
    }
}
