<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListPowerStationRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmInstanceUid;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $powerStationName;
    protected $_name = [
        'algorithmInstanceUid' => 'AlgorithmInstanceUid',
        'iotInstanceId'        => 'IotInstanceId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'powerStationName'     => 'PowerStationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmInstanceUid) {
            $res['AlgorithmInstanceUid'] = $this->algorithmInstanceUid;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->powerStationName) {
            $res['PowerStationName'] = $this->powerStationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPowerStationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmInstanceUid'])) {
            $model->algorithmInstanceUid = $map['AlgorithmInstanceUid'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PowerStationName'])) {
            $model->powerStationName = $map['PowerStationName'];
        }

        return $model;
    }
}
