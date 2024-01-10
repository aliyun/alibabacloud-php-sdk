<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class StartPTDetectionRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmInstanceUid;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $dataCollectionTime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $powerPlantsNumber;

    /**
     * @var string
     */
    public $powerStationUid;

    /**
     * @var int
     */
    public $sensitivity;
    protected $_name = [
        'algorithmInstanceUid' => 'AlgorithmInstanceUid',
        'data'                 => 'Data',
        'dataCollectionTime'   => 'DataCollectionTime',
        'fileName'             => 'FileName',
        'iotInstanceId'        => 'IotInstanceId',
        'powerPlantsNumber'    => 'PowerPlantsNumber',
        'powerStationUid'      => 'PowerStationUid',
        'sensitivity'          => 'Sensitivity',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataCollectionTime) {
            $res['DataCollectionTime'] = $this->dataCollectionTime;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->powerPlantsNumber) {
            $res['PowerPlantsNumber'] = $this->powerPlantsNumber;
        }
        if (null !== $this->powerStationUid) {
            $res['PowerStationUid'] = $this->powerStationUid;
        }
        if (null !== $this->sensitivity) {
            $res['Sensitivity'] = $this->sensitivity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPTDetectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmInstanceUid'])) {
            $model->algorithmInstanceUid = $map['AlgorithmInstanceUid'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataCollectionTime'])) {
            $model->dataCollectionTime = $map['DataCollectionTime'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PowerPlantsNumber'])) {
            $model->powerPlantsNumber = $map['PowerPlantsNumber'];
        }
        if (isset($map['PowerStationUid'])) {
            $model->powerStationUid = $map['PowerStationUid'];
        }
        if (isset($map['Sensitivity'])) {
            $model->sensitivity = $map['Sensitivity'];
        }

        return $model;
    }
}
