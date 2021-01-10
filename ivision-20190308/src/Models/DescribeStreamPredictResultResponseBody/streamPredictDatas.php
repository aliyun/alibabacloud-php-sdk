<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models\DescribeStreamPredictResultResponseBody;

use AlibabaCloud\Tea\Model;

class streamPredictDatas extends Model
{
    /**
     * @var string
     */
    public $predictId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $dataUrl;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $predictTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $predictResult;
    protected $_name = [
        'predictId'     => 'PredictId',
        'modelId'       => 'ModelId',
        'dataUrl'       => 'DataUrl',
        'timestamp'     => 'Timestamp',
        'predictTime'   => 'PredictTime',
        'status'        => 'Status',
        'predictResult' => 'PredictResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->predictId) {
            $res['PredictId'] = $this->predictId;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->dataUrl) {
            $res['DataUrl'] = $this->dataUrl;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->predictTime) {
            $res['PredictTime'] = $this->predictTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->predictResult) {
            $res['PredictResult'] = $this->predictResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamPredictDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PredictId'])) {
            $model->predictId = $map['PredictId'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['DataUrl'])) {
            $model->dataUrl = $map['DataUrl'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['PredictTime'])) {
            $model->predictTime = $map['PredictTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PredictResult'])) {
            $model->predictResult = $map['PredictResult'];
        }

        return $model;
    }
}
