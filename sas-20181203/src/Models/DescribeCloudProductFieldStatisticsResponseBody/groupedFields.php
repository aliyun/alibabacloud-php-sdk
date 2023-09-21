<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudProductFieldStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class groupedFields extends Model
{
    /**
     * @description The statistics of different types of assets. **MachineType** indicates the type of the asset. **Count** indicates the number of assets of a specific type.
     *
     * Valid values of **MachineType**:
     *
     *   **1**: Server Load Balancer (SLB) instance
     *   **2**: NAT gateway instance
     *   **3**: ApsaraDB RDS instance
     *   **4**: ApsaraDB for MongoDB instance
     *
     * @example [{"MachineType":1,"Count":11}]
     *
     * @var string
     */
    public $categoryCount;

    /**
     * @description The total number of cloud services that are protected by Security Center.
     *
     * @example 100
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The number of cloud services that are at risk.
     *
     * @example 90
     *
     * @var int
     */
    public $riskInstanceCount;
    protected $_name = [
        'categoryCount'     => 'CategoryCount',
        'instanceCount'     => 'InstanceCount',
        'riskInstanceCount' => 'RiskInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return groupedFields
     */
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
