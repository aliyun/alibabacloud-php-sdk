<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListQuotasMinEffectPlanResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListQuotasMinEffectPlanResponseBody\quotas\quotaValueDetail;

class quotas extends Model
{
    /**
     * @var string
     */
    public $quotaName;

    /**
     * @var quotaValueDetail[]
     */
    public $quotaValueDetail;

    /**
     * @var string
     */
    public $quotaValueType;
    protected $_name = [
        'quotaName' => 'QuotaName',
        'quotaValueDetail' => 'QuotaValueDetail',
        'quotaValueType' => 'QuotaValueType',
    ];

    public function validate()
    {
        if (\is_array($this->quotaValueDetail)) {
            Model::validateArray($this->quotaValueDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
        }

        if (null !== $this->quotaValueDetail) {
            if (\is_array($this->quotaValueDetail)) {
                $res['QuotaValueDetail'] = [];
                $n1 = 0;
                foreach ($this->quotaValueDetail as $item1) {
                    $res['QuotaValueDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotaValueType) {
            $res['QuotaValueType'] = $this->quotaValueType;
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
        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        if (isset($map['QuotaValueDetail'])) {
            if (!empty($map['QuotaValueDetail'])) {
                $model->quotaValueDetail = [];
                $n1 = 0;
                foreach ($map['QuotaValueDetail'] as $item1) {
                    $model->quotaValueDetail[$n1] = quotaValueDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QuotaValueType'])) {
            $model->quotaValueType = $map['QuotaValueType'];
        }

        return $model;
    }
}
