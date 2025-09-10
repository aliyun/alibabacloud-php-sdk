<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\ListQuotaApplicationsForTemplateResponseBody\quotaBatchApplications\auditStatusVos;

class quotaBatchApplications extends Model
{
    /**
     * @var string[]
     */
    public $aliyunUids;

    /**
     * @var string
     */
    public $applyTime;

    /**
     * @var auditStatusVos[]
     */
    public $auditStatusVos;

    /**
     * @var string
     */
    public $batchQuotaApplicationId;

    /**
     * @var float
     */
    public $desireValue;

    /**
     * @var mixed[]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expireTime;

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
    public $quotaCategory;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'aliyunUids' => 'AliyunUids',
        'applyTime' => 'ApplyTime',
        'auditStatusVos' => 'AuditStatusVos',
        'batchQuotaApplicationId' => 'BatchQuotaApplicationId',
        'desireValue' => 'DesireValue',
        'dimensions' => 'Dimensions',
        'effectiveTime' => 'EffectiveTime',
        'expireTime' => 'ExpireTime',
        'productCode' => 'ProductCode',
        'quotaActionCode' => 'QuotaActionCode',
        'quotaCategory' => 'QuotaCategory',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunUids)) {
            Model::validateArray($this->aliyunUids);
        }
        if (\is_array($this->auditStatusVos)) {
            Model::validateArray($this->auditStatusVos);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUids) {
            if (\is_array($this->aliyunUids)) {
                $res['AliyunUids'] = [];
                $n1 = 0;
                foreach ($this->aliyunUids as $item1) {
                    $res['AliyunUids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->auditStatusVos) {
            if (\is_array($this->auditStatusVos)) {
                $res['AuditStatusVos'] = [];
                $n1 = 0;
                foreach ($this->auditStatusVos as $item1) {
                    $res['AuditStatusVos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->batchQuotaApplicationId) {
            $res['BatchQuotaApplicationId'] = $this->batchQuotaApplicationId;
        }

        if (null !== $this->desireValue) {
            $res['DesireValue'] = $this->desireValue;
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                foreach ($this->dimensions as $key1 => $value1) {
                    $res['Dimensions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->quotaActionCode) {
            $res['QuotaActionCode'] = $this->quotaActionCode;
        }

        if (null !== $this->quotaCategory) {
            $res['QuotaCategory'] = $this->quotaCategory;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['AliyunUids'])) {
            if (!empty($map['AliyunUids'])) {
                $model->aliyunUids = [];
                $n1 = 0;
                foreach ($map['AliyunUids'] as $item1) {
                    $model->aliyunUids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['AuditStatusVos'])) {
            if (!empty($map['AuditStatusVos'])) {
                $model->auditStatusVos = [];
                $n1 = 0;
                foreach ($map['AuditStatusVos'] as $item1) {
                    $model->auditStatusVos[$n1] = auditStatusVos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BatchQuotaApplicationId'])) {
            $model->batchQuotaApplicationId = $map['BatchQuotaApplicationId'];
        }

        if (isset($map['DesireValue'])) {
            $model->desireValue = $map['DesireValue'];
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                foreach ($map['Dimensions'] as $key1 => $value1) {
                    $model->dimensions[$key1] = $value1;
                }
            }
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['QuotaActionCode'])) {
            $model->quotaActionCode = $map['QuotaActionCode'];
        }

        if (isset($map['QuotaCategory'])) {
            $model->quotaCategory = $map['QuotaCategory'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
