<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data\content\protectionScoreDistribution;

class content extends Model
{
    /**
     * @var int
     */
    public $checkFailedCount;

    /**
     * @var int
     */
    public $checkFailedResourceCount;

    /**
     * @var int
     */
    public $disableCheckResourceCount;

    /**
     * @var bool
     */
    public $enableCheck;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $protectionScore;

    /**
     * @var protectionScoreDistribution[]
     */
    public $protectionScoreDistribution;

    /**
     * @var int
     */
    public $protectionScoreUpdatedTime;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int
     */
    public $riskyResourceCount;

    /**
     * @var int
     */
    public $totalResourceCount;

    /**
     * @var int
     */
    public $waitForCheckResourceCount;
    protected $_name = [
        'checkFailedCount' => 'CheckFailedCount',
        'checkFailedResourceCount' => 'CheckFailedResourceCount',
        'disableCheckResourceCount' => 'DisableCheckResourceCount',
        'enableCheck' => 'EnableCheck',
        'productType' => 'ProductType',
        'protectionScore' => 'ProtectionScore',
        'protectionScoreDistribution' => 'ProtectionScoreDistribution',
        'protectionScoreUpdatedTime' => 'ProtectionScoreUpdatedTime',
        'riskCount' => 'RiskCount',
        'riskyResourceCount' => 'RiskyResourceCount',
        'totalResourceCount' => 'TotalResourceCount',
        'waitForCheckResourceCount' => 'WaitForCheckResourceCount',
    ];

    public function validate()
    {
        if (\is_array($this->protectionScoreDistribution)) {
            Model::validateArray($this->protectionScoreDistribution);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkFailedCount) {
            $res['CheckFailedCount'] = $this->checkFailedCount;
        }

        if (null !== $this->checkFailedResourceCount) {
            $res['CheckFailedResourceCount'] = $this->checkFailedResourceCount;
        }

        if (null !== $this->disableCheckResourceCount) {
            $res['DisableCheckResourceCount'] = $this->disableCheckResourceCount;
        }

        if (null !== $this->enableCheck) {
            $res['EnableCheck'] = $this->enableCheck;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->protectionScore) {
            $res['ProtectionScore'] = $this->protectionScore;
        }

        if (null !== $this->protectionScoreDistribution) {
            if (\is_array($this->protectionScoreDistribution)) {
                $res['ProtectionScoreDistribution'] = [];
                $n1 = 0;
                foreach ($this->protectionScoreDistribution as $item1) {
                    $res['ProtectionScoreDistribution'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->protectionScoreUpdatedTime) {
            $res['ProtectionScoreUpdatedTime'] = $this->protectionScoreUpdatedTime;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->riskyResourceCount) {
            $res['RiskyResourceCount'] = $this->riskyResourceCount;
        }

        if (null !== $this->totalResourceCount) {
            $res['TotalResourceCount'] = $this->totalResourceCount;
        }

        if (null !== $this->waitForCheckResourceCount) {
            $res['WaitForCheckResourceCount'] = $this->waitForCheckResourceCount;
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
        if (isset($map['CheckFailedCount'])) {
            $model->checkFailedCount = $map['CheckFailedCount'];
        }

        if (isset($map['CheckFailedResourceCount'])) {
            $model->checkFailedResourceCount = $map['CheckFailedResourceCount'];
        }

        if (isset($map['DisableCheckResourceCount'])) {
            $model->disableCheckResourceCount = $map['DisableCheckResourceCount'];
        }

        if (isset($map['EnableCheck'])) {
            $model->enableCheck = $map['EnableCheck'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProtectionScore'])) {
            $model->protectionScore = $map['ProtectionScore'];
        }

        if (isset($map['ProtectionScoreDistribution'])) {
            if (!empty($map['ProtectionScoreDistribution'])) {
                $model->protectionScoreDistribution = [];
                $n1 = 0;
                foreach ($map['ProtectionScoreDistribution'] as $item1) {
                    $model->protectionScoreDistribution[$n1] = protectionScoreDistribution::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProtectionScoreUpdatedTime'])) {
            $model->protectionScoreUpdatedTime = $map['ProtectionScoreUpdatedTime'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['RiskyResourceCount'])) {
            $model->riskyResourceCount = $map['RiskyResourceCount'];
        }

        if (isset($map['TotalResourceCount'])) {
            $model->totalResourceCount = $map['TotalResourceCount'];
        }

        if (isset($map['WaitForCheckResourceCount'])) {
            $model->waitForCheckResourceCount = $map['WaitForCheckResourceCount'];
        }

        return $model;
    }
}
