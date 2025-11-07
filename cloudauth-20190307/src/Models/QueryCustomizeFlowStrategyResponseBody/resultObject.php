<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\QueryCustomizeFlowStrategyResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $accumulateKey;

    /**
     * @var string
     */
    public $accumulateWindow;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accumulateKey' => 'AccumulateKey',
        'accumulateWindow' => 'AccumulateWindow',
        'apiName' => 'ApiName',
        'flowType' => 'FlowType',
        'id' => 'Id',
        'operation' => 'Operation',
        'status' => 'Status',
        'threshold' => 'Threshold',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accumulateKey) {
            $res['AccumulateKey'] = $this->accumulateKey;
        }

        if (null !== $this->accumulateWindow) {
            $res['AccumulateWindow'] = $this->accumulateWindow;
        }

        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccumulateKey'])) {
            $model->accumulateKey = $map['AccumulateKey'];
        }

        if (isset($map['AccumulateWindow'])) {
            $model->accumulateWindow = $map['AccumulateWindow'];
        }

        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
