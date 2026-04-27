<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class UsageBreakdownRowDTO extends Model
{
    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var MetricKVPairDTO[]
     */
    public $metrics;

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
     * @var int
     */
    public $summaryTime;
    protected $_name = [
        'clientId' => 'clientId',
        'clientName' => 'clientName',
        'metrics' => 'metrics',
        'modelCode' => 'modelCode',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'modelType' => 'modelType',
        'summaryTime' => 'summaryTime',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->clientName) {
            $res['clientName'] = $this->clientName;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['clientName'])) {
            $model->clientName = $map['clientName'];
        }

        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['metrics'] as $item1) {
                    $model->metrics[$n1] = MetricKVPairDTO::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['summaryTime'])) {
            $model->summaryTime = $map['summaryTime'];
        }

        return $model;
    }
}
