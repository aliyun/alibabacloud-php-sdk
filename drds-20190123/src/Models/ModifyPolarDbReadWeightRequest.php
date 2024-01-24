<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ModifyPolarDbReadWeightRequest extends Model
{
    /**
     * @description Polar cluster ID.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @description The name of the database.
     *
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The node list in the destination apsaradb for PolarDB cluster. The nodes in each cluster are separated with commas (,) and colons (:).
     *
     * @example pi-****************,pi-****************:pi-****************
     *
     * @var string
     */
    public $dbNodeIds;

    /**
     * @description The ID of a DRDS instance.
     *
     * @example drds************
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The weight of the PolarDB cluster. Separate multiple weights with commas (,).
     *
     * @example 14,86
     *
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
