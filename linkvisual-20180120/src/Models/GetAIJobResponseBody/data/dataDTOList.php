<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataDTOList extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $algoData;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'dataId'     => 'DataId',
        'dataType'   => 'DataType',
        'dataSource' => 'DataSource',
        'algoData'   => 'AlgoData',
        'jobId'      => 'JobId',
        'iotId'      => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->algoData) {
            $res['AlgoData'] = $this->algoData;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['AlgoData'])) {
            $model->algoData = $map['AlgoData'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
