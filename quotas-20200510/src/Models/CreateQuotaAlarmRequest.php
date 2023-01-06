<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\CreateQuotaAlarmRequest\quotaDimensions;
use AlibabaCloud\Tea\Model;

class CreateQuotaAlarmRequest extends Model
{
    /**
     * @description The name of the quota alert.
     *
     * @var string
     */
    public $alarmName;

    /**
     * @description The abbreviation of the cloud service name.
     *
     * >  For more information, see [Alibaba Cloud services that support Quota Center](~~182368~~).
     * @example config
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The ID of the quota.
     *
     * @example q_hvnoqv
     *
     * @var string
     */
    public $quotaActionCode;

    /**
     * @var quotaDimensions[]
     */
    public $quotaDimensions;

    /**
     * @description The numeric value of the alert threshold. The value must meet the following requirements:
     *
     *   If the `ThresholdType` parameter is set to `used` and the used quota is greater than or equal to a specified value, you receive an alert. The alert threshold must be greater than the current used quota.
     *   If the `ThresholdType` parameter is set to `usable` and the available quota is less than or equal to a specified value, you received an alert. The alert threshold must be less than the current available quota.
     *
     * >  You must set one of the Threshold and ThresholdPercent parameters.
     * @example 150
     *
     * @var float
     */
    public $threshold;

    /**
     * @description The percentage of the alert threshold. Valid values:
     *
     *   If the `ThresholdType` parameter is set to `used` and the percentage of the used quota in the total quota is greater than or equal to a specified value, you receive an alert. Value range: (50%, 100%].
     *   If the `ThresholdType` parameter is set to `usable` and the percentage of the available quota in the total quota is less than or equal to a specified value, you receive an alert. Value range: (0%, 50%].
     *
     * >  You must set one of the Threshold and ThresholdPercent parameters.
     * @example 50
     *
     * @var float
     */
    public $thresholdPercent;

    /**
     * @description The type of the quota alert. Valid values:
     *
     *   used: The alert is created for the used quota.
     *   usable: The alert is created for the available quota.
     *
     * @example used
     *
     * @var string
     */
    public $thresholdType;

    /**
     * @description The webhook URL. Quota Center sends the alert notification to a specified URL by using an HTTP POST request.
     *
     * @example https://alert.aliyun.com/callback
     *
     * @var string
     */
    public $webHook;
    protected $_name = [
        'alarmName'        => 'AlarmName',
        'productCode'      => 'ProductCode',
        'quotaActionCode'  => 'QuotaActionCode',
        'quotaDimensions'  => 'QuotaDimensions',
        'threshold'        => 'Threshold',
        'thresholdPercent' => 'ThresholdPercent',
        'thresholdType'    => 'ThresholdType',
        'webHook'          => 'WebHook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
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

    /**
     * @param array $map
     *
     * @return CreateQuotaAlarmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
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
                $n                      = 0;
                foreach ($map['QuotaDimensions'] as $item) {
                    $model->quotaDimensions[$n++] = null !== $item ? quotaDimensions::fromMap($item) : $item;
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
