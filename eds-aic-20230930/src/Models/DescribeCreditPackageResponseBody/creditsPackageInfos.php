<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditPackageResponseBody;

use AlibabaCloud\Dara\Model;

class creditsPackageInfos extends Model
{
    /**
     * @var string
     */
    public $availableCredits;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creditPackageId;

    /**
     * @var string
     */
    public $creditPackageStatus;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $exhaustedCredits;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $totalCredits;
    protected $_name = [
        'availableCredits' => 'AvailableCredits',
        'createTime' => 'CreateTime',
        'creditPackageId' => 'CreditPackageId',
        'creditPackageStatus' => 'CreditPackageStatus',
        'effectiveTime' => 'EffectiveTime',
        'exhaustedCredits' => 'ExhaustedCredits',
        'expiredTime' => 'ExpiredTime',
        'totalCredits' => 'TotalCredits',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableCredits) {
            $res['AvailableCredits'] = $this->availableCredits;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creditPackageId) {
            $res['CreditPackageId'] = $this->creditPackageId;
        }

        if (null !== $this->creditPackageStatus) {
            $res['CreditPackageStatus'] = $this->creditPackageStatus;
        }

        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->exhaustedCredits) {
            $res['ExhaustedCredits'] = $this->exhaustedCredits;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->totalCredits) {
            $res['TotalCredits'] = $this->totalCredits;
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
        if (isset($map['AvailableCredits'])) {
            $model->availableCredits = $map['AvailableCredits'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreditPackageId'])) {
            $model->creditPackageId = $map['CreditPackageId'];
        }

        if (isset($map['CreditPackageStatus'])) {
            $model->creditPackageStatus = $map['CreditPackageStatus'];
        }

        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }

        if (isset($map['ExhaustedCredits'])) {
            $model->exhaustedCredits = $map['ExhaustedCredits'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['TotalCredits'])) {
            $model->totalCredits = $map['TotalCredits'];
        }

        return $model;
    }
}
