<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListPowerStationResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $algoInstanceUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $powerStationUid;

    /**
     * @var int
     */
    public $ratedPower;
    protected $_name = [
        'algoInstanceUid' => 'AlgoInstanceUid',
        'description'     => 'Description',
        'name'            => 'Name',
        'powerStationUid' => 'PowerStationUid',
        'ratedPower'      => 'RatedPower',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoInstanceUid) {
            $res['AlgoInstanceUid'] = $this->algoInstanceUid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->powerStationUid) {
            $res['PowerStationUid'] = $this->powerStationUid;
        }
        if (null !== $this->ratedPower) {
            $res['RatedPower'] = $this->ratedPower;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoInstanceUid'])) {
            $model->algoInstanceUid = $map['AlgoInstanceUid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PowerStationUid'])) {
            $model->powerStationUid = $map['PowerStationUid'];
        }
        if (isset($map['RatedPower'])) {
            $model->ratedPower = $map['RatedPower'];
        }

        return $model;
    }
}
