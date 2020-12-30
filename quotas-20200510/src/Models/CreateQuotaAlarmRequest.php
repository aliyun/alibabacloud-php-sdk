<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmRequest\quotaDimensions;
use AlibabaCloud\Tea\Model;

class CreateQuotaAlarmRequest extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var string
     */
    public $alarmName;

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
    public $webHook;

    /**
     * @var quotaDimensions[]
     */
    public $quotaDimensions;
    protected $_name = [
        'productCode'      => 'ProductCode',
        'quotaActionCode'  => 'QuotaActionCode',
        'alarmName'        => 'AlarmName',
        'threshold'        => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
        'webHook'          => 'WebHook',
        'quotaDimensions'  => 'QuotaDimensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
        }
        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
        }
        if (null !== $this->quotaDimensions) {
            $res['QuotaDimensions'] = [];
            if (null !== $this->quotaDimensions && \is_array($this->quotaDimensions)) {
                $n = 0;
                foreach ($this->quotaDimensions as $item) {
                    $res['QuotaDimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQuotaAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }
        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }
        if (isset($map['QuotaDimensions'])) {
            if (!empty($map['QuotaDimensions'])) {
                $model->quotaDimensions = [];
                $n                      = 0;
                foreach ($map['QuotaDimensions'] as $item) {
                    $model->quotaDimensions[$n++] = null !== $item ? quotaDimensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
