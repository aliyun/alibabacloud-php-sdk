<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupedContainerInstancesRequest extends Model
{
    /**
     * @description The search conditions for assets. Specify the value in the JSON format. Separate multiple search conditions with commas (,). Example: `[{"name":"riskStatus","value":"YES"},{"name":"riskLevel","value":"2"}]`.
     *
     * >  Supported search conditions include the instance ID, instance name, virtual private cloud (VPC) ID, region, and public IP address. You can call the [DescribeCriteria](~~DescribeCriteria~~) operation to query the supported search conditions.
     * @example [{"name":"riskStatus","value":"YES"},{"name":"riskLevel","value":"2"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The keyword that you want to use to query containers. You must specify this parameter based on the value of the GroupField parameter.
     *
     *   If the **GroupField** parameter is set to **pod**, set this parameter to the name of the pod that you want to query.
     *   If the **GroupField** parameter is set to **appName**, set this parameter to the name of the application that you want to query.
     *   If the **GroupField** parameter is set to **namespace**, set this parameter to the namespace that you want to query.
     *   If the **GroupField** parameter is set to **clusterId**, set this parameter to the ID of the cluster that you want to query.
     *
     * >  Fuzzy match is supported.
     * @example cas-adad-qeqwe
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @description The group type that you want to use to query containers. Valid values:
     *
     *   **pod**
     *   **appName**
     *   **namespace**
     *   **clusterId**
     *
     * This parameter is required.
     * @example pod
     *
     * @var string
     */
    public $groupField;

    /**
     * @description The logical relationship that you want to use to evaluate multiple search conditions. Valid values:
     *
     *   **OR**: Search conditions are evaluated by using a logical **OR**.
     *   **AND**: Search conditions are evaluated by using a logical **AND**.
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'criteria'    => 'Criteria',
        'currentPage' => 'CurrentPage',
        'fieldValue'  => 'FieldValue',
        'groupField'  => 'GroupField',
        'logicalExp'  => 'LogicalExp',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->groupField) {
            $res['GroupField'] = $this->groupField;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedContainerInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['GroupField'])) {
            $model->groupField = $map['GroupField'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
