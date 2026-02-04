<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetServiceQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class serviceQuota extends Model
{
    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var int
     */
    public $quotaValue;

    /**
     * @var int
     */
    public $usedQuotaValue;
    protected $_name = [
        'quotaType' => 'QuotaType',
        'quotaValue' => 'QuotaValue',
        'usedQuotaValue' => 'UsedQuotaValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }

        if (null !== $this->quotaValue) {
            $res['QuotaValue'] = $this->quotaValue;
        }

        if (null !== $this->usedQuotaValue) {
            $res['UsedQuotaValue'] = $this->usedQuotaValue;
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
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        if (isset($map['QuotaValue'])) {
            $model->quotaValue = $map['QuotaValue'];
        }

        if (isset($map['UsedQuotaValue'])) {
            $model->usedQuotaValue = $map['UsedQuotaValue'];
        }

        return $model;
    }
}
