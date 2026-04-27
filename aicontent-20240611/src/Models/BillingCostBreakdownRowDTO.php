<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class BillingCostBreakdownRowDTO extends Model
{
    /**
     * @var string
     */
    public $billingType;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var float
     */
    public $payableAmount;

    /**
     * @var int
     */
    public $summaryTime;
    protected $_name = [
        'billingType' => 'billingType',
        'clientId' => 'clientId',
        'clientName' => 'clientName',
        'modelCode' => 'modelCode',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'modelType' => 'modelType',
        'payableAmount' => 'payableAmount',
        'summaryTime' => 'summaryTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingType) {
            $res['billingType'] = $this->billingType;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->clientName) {
            $res['clientName'] = $this->clientName;
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->payableAmount) {
            $res['payableAmount'] = $this->payableAmount;
        }

        if (null !== $this->summaryTime) {
            $res['summaryTime'] = $this->summaryTime;
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
        if (isset($map['billingType'])) {
            $model->billingType = $map['billingType'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['clientName'])) {
            $model->clientName = $map['clientName'];
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['payableAmount'])) {
            $model->payableAmount = $map['payableAmount'];
        }

        if (isset($map['summaryTime'])) {
            $model->summaryTime = $map['summaryTime'];
        }

        return $model;
    }
}
