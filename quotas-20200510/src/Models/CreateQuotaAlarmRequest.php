<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmRequest\quotaDimensions;

class CreateQuotaAlarmRequest extends Model
{
    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $originalContext;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var quotaDimensions[]
     */
    public $quotaDimensions;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var float
     */
    public $thresholdPercent;

    /**
     * @var string
     */
    public $thresholdType;

    /**
     * @var string
     */
    public $webHook;
    protected $_name = [
        'alarmName' => 'AlarmName',
        'originalContext' => 'OriginalContext',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaDimensions' => 'QuotaDimensions',
        'threshold' => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
        'thresholdType' => 'ThresholdType',
        'webHook' => 'WebHook',
    ];

    public function validate()
    {
        if (\is_array($this->quotaDimensions)) {
            Model::validateArray($this->quotaDimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }

        if (null !== $this->originalContext) {
            $res['OriginalContext'] = $this->originalContext;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }

        if (null !== $this->quotaDimensions) {
            if (\is_array($this->quotaDimensions)) {
                $res['QuotaDimensions'] = [];
                $n1 = 0;
                foreach ($this->quotaDimensions as $item1) {
                    $res['QuotaDimensions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
        }

        if (null !== $this->thresholdType) {
            $res['ThresholdType'] = $this->thresholdType;
        }

        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
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
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }

        if (isset($map['OriginalContext'])) {
            $model->originalContext = $map['OriginalContext'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }

        if (isset($map['QuotaDimensions'])) {
            if (!empty($map['QuotaDimensions'])) {
                $model->quotaDimensions = [];
                $n1 = 0;
                foreach ($map['QuotaDimensions'] as $item1) {
                    $model->quotaDimensions[$n1] = quotaDimensions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }

        if (isset($map['ThresholdType'])) {
            $model->thresholdType = $map['ThresholdType'];
        }

        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}
