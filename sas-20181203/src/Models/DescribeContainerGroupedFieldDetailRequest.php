<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupedFieldDetailRequest extends Model
{
    /**
     * @description The search conditions that are used to query assets. The value of this parameter is in the JSON format. Separate multiple search conditions with commas (,). Example: `[{"name":"riskStatus","value":"YES"},{"name":"riskLevel","value":"2"}]`.
     *
     * >  Supported search conditions include the instance ID, instance name, virtual private cloud (VPC) ID, region, and public IP address. You can call the [DescribeCriteria](~~DescribeCriteria~~) operation to query the supported search conditions.
     *
     * This parameter is required.
     *
     * @example [{\\"name\\":\\"clusterId\\",\\"value\\":\\"cfd26658431084c73a48dd97328ba8acf\\"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The filter condition for a grouping and aggregation query. Valid values:
     *
     *   **pod**
     *   **appName**
     *   **clusterId**
     *   **namespace**
     *   **image**
     *   **containerScan**
     *
     * This parameter is required.
     *
     * @example pod
     *
     * @var string
     */
    public $groupField;
    protected $_name = [
        'criteria' => 'Criteria',
        'groupField' => 'GroupField',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->groupField) {
            $res['GroupField'] = $this->groupField;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerGroupedFieldDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['GroupField'])) {
            $model->groupField = $map['GroupField'];
        }

        return $model;
    }
}
