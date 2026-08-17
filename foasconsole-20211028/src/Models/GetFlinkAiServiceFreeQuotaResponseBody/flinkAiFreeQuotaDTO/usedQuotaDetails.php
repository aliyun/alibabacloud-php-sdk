<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\GetFlinkAiServiceFreeQuotaResponseBody\flinkAiFreeQuotaDTO;

use AlibabaCloud\Dara\Model;

class usedQuotaDetails extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $usageType;
    protected $_name = [
        'amount' => 'Amount',
        'usageType' => 'UsageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->usageType) {
            $res['UsageType'] = $this->usageType;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['UsageType'])) {
            $model->usageType = $map['UsageType'];
        }

        return $model;
    }
}
