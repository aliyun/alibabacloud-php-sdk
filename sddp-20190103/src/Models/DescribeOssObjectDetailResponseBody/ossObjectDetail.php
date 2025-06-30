<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeOssObjectDetailResponseBody\ossObjectDetail\ruleList;

class ossObjectDetail extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $riskLevelName;

    /**
     * @var ruleList[]
     */
    public $ruleList;
    protected $_name = [
        'bucketName' => 'BucketName',
        'categoryName' => 'CategoryName',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'riskLevelName' => 'RiskLevelName',
        'ruleList' => 'RuleList',
    ];

    public function validate()
    {
        if (\is_array($this->ruleList)) {
            Model::validateArray($this->ruleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->riskLevelName) {
            $res['RiskLevelName'] = $this->riskLevelName;
        }

        if (null !== $this->ruleList) {
            if (\is_array($this->ruleList)) {
                $res['RuleList'] = [];
                $n1 = 0;
                foreach ($this->ruleList as $item1) {
                    $res['RuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RiskLevelName'])) {
            $model->riskLevelName = $map['RiskLevelName'];
        }

        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = [];
                $n1 = 0;
                foreach ($map['RuleList'] as $item1) {
                    $model->ruleList[$n1] = ruleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
