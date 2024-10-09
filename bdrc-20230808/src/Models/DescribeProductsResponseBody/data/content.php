<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data;

use AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeProductsResponseBody\data\content\protectionScoreDistribution;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $checkFailedCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $checkFailedResourceCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $disableCheckResourceCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableCheck;

    /**
     * @example oss
     *
     * @var string
     */
    public $productType;

    /**
     * @example 90
     *
     * @var int
     */
    public $protectionScore;

    /**
     * @var protectionScoreDistribution[]
     */
    public $protectionScoreDistribution;

    /**
     * @example 1726036498
     *
     * @var int
     */
    public $protectionScoreUpdatedTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskyResourceCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalResourceCount;
    protected $_name = [
        'checkFailedCount'            => 'CheckFailedCount',
        'checkFailedResourceCount'    => 'CheckFailedResourceCount',
        'disableCheckResourceCount'   => 'DisableCheckResourceCount',
        'enableCheck'                 => 'EnableCheck',
        'productType'                 => 'ProductType',
        'protectionScore'             => 'ProtectionScore',
        'protectionScoreDistribution' => 'ProtectionScoreDistribution',
        'protectionScoreUpdatedTime'  => 'ProtectionScoreUpdatedTime',
        'riskCount'                   => 'RiskCount',
        'riskyResourceCount'          => 'RiskyResourceCount',
        'totalResourceCount'          => 'TotalResourceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['ProtectionScoreDistribution'] = [];
            if (null !== $this->protectionScoreDistribution && \is_array($this->protectionScoreDistribution)) {
                $n = 0;
                foreach ($this->protectionScoreDistribution as $item) {
                    $res['ProtectionScoreDistribution'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
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
                $n                                  = 0;
                foreach ($map['ProtectionScoreDistribution'] as $item) {
                    $model->protectionScoreDistribution[$n++] = null !== $item ? protectionScoreDistribution::fromMap($item) : $item;
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

        return $model;
    }
}
