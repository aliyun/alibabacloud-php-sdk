<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeCreditPackageResponseBody\creditsPackageInfos;

class DescribeCreditPackageResponseBody extends Model
{
    /**
     * @var creditsPackageInfos[]
     */
    public $creditsPackageInfos;

    /**
     * @var bool
     */
    public $isFirstPurchase;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalAvailableCredits;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $totalExhaustedCredit;
    protected $_name = [
        'creditsPackageInfos' => 'CreditsPackageInfos',
        'isFirstPurchase' => 'IsFirstPurchase',
        'requestId' => 'RequestId',
        'totalAvailableCredits' => 'TotalAvailableCredits',
        'totalCount' => 'TotalCount',
        'totalExhaustedCredit' => 'TotalExhaustedCredit',
    ];

    public function validate()
    {
        if (\is_array($this->creditsPackageInfos)) {
            Model::validateArray($this->creditsPackageInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditsPackageInfos) {
            if (\is_array($this->creditsPackageInfos)) {
                $res['CreditsPackageInfos'] = [];
                $n1 = 0;
                foreach ($this->creditsPackageInfos as $item1) {
                    $res['CreditsPackageInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isFirstPurchase) {
            $res['IsFirstPurchase'] = $this->isFirstPurchase;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalAvailableCredits) {
            $res['TotalAvailableCredits'] = $this->totalAvailableCredits;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalExhaustedCredit) {
            $res['TotalExhaustedCredit'] = $this->totalExhaustedCredit;
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
        if (isset($map['CreditsPackageInfos'])) {
            if (!empty($map['CreditsPackageInfos'])) {
                $model->creditsPackageInfos = [];
                $n1 = 0;
                foreach ($map['CreditsPackageInfos'] as $item1) {
                    $model->creditsPackageInfos[$n1] = creditsPackageInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IsFirstPurchase'])) {
            $model->isFirstPurchase = $map['IsFirstPurchase'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalAvailableCredits'])) {
            $model->totalAvailableCredits = $map['TotalAvailableCredits'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalExhaustedCredit'])) {
            $model->totalExhaustedCredit = $map['TotalExhaustedCredit'];
        }

        return $model;
    }
}
