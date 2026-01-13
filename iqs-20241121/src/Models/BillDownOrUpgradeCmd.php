<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class BillDownOrUpgradeCmd extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $activeDate;

    /**
     * @var string
     */
    public $codeType;

    /**
     * @var string
     */
    public $operateTypEnum;

    /**
     * @var int
     */
    public $qps;
    protected $_name = [
        'accountId' => 'accountId',
        'activeDate' => 'activeDate',
        'codeType' => 'codeType',
        'operateTypEnum' => 'operateTypEnum',
        'qps' => 'qps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->activeDate) {
            $res['activeDate'] = $this->activeDate;
        }

        if (null !== $this->codeType) {
            $res['codeType'] = $this->codeType;
        }

        if (null !== $this->operateTypEnum) {
            $res['operateTypEnum'] = $this->operateTypEnum;
        }

        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['activeDate'])) {
            $model->activeDate = $map['activeDate'];
        }

        if (isset($map['codeType'])) {
            $model->codeType = $map['codeType'];
        }

        if (isset($map['operateTypEnum'])) {
            $model->operateTypEnum = $map['operateTypEnum'];
        }

        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }

        return $model;
    }
}
