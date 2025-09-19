<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudProductFieldStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class groupedFields extends Model
{
    /**
     * @var string
     */
    public $categoryCount;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $riskInstanceCount;
    protected $_name = [
        'categoryCount' => 'CategoryCount',
        'instanceCount' => 'InstanceCount',
        'riskInstanceCount' => 'RiskInstanceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryCount) {
            $res['CategoryCount'] = $this->categoryCount;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->riskInstanceCount) {
            $res['RiskInstanceCount'] = $this->riskInstanceCount;
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
        if (isset($map['CategoryCount'])) {
            $model->categoryCount = $map['CategoryCount'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['RiskInstanceCount'])) {
            $model->riskInstanceCount = $map['RiskInstanceCount'];
        }

        return $model;
    }
}
