<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeCreditUsageInfoResponseBody\usageInfoList\usageInfo;

use AlibabaCloud\Dara\Model;

class remainCreditInfo extends Model
{
    /**
     * @var int
     */
    public $deductingAmount;

    /**
     * @var int
     */
    public $pendingAmount;
    protected $_name = [
        'deductingAmount' => 'DeductingAmount',
        'pendingAmount' => 'PendingAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deductingAmount) {
            $res['DeductingAmount'] = $this->deductingAmount;
        }

        if (null !== $this->pendingAmount) {
            $res['PendingAmount'] = $this->pendingAmount;
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
        if (isset($map['DeductingAmount'])) {
            $model->deductingAmount = $map['DeductingAmount'];
        }

        if (isset($map['PendingAmount'])) {
            $model->pendingAmount = $map['PendingAmount'];
        }

        return $model;
    }
}
