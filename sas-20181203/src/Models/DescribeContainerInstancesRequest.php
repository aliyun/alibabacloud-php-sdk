<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerInstancesRequest extends Model
{
    /**
     * @description The search conditions that are used to filter containers. The value of this parameter is in the JSON format and is case-sensitive. The value contains the following fields:
     *
     *   **name**: the search condition.
     *
     *   **name**: the value of the search condition.
     *
     *   **logicalExp**: the logical relationship among multiple search conditions. Valid values:
     *
     *   **OR**: Search conditions are evaluated by using a logical **OR**.
     *   **AND**: Search conditions are evaluated by using a logical **AND**.
     *
     * > You can use search conditions such as the container ID, cluster ID, cluster name, cluster type, risk level, and region. You can call the [DescribeContainerCriteria](~~DescribeContainerCriteria~~) operation to query the supported search conditions.
     * @example [{"name":"flag","value":"0|8","logicalExp":"AND"},{"name":"ecsType","value":"!8","logicalExp":"AND"}][{"name":"clusterType","value":"NotManagedKubernetes","logicalExp":"AND"}]
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
     * @description The logical operator that you want to use to evaluate multiple search conditions. Valid values:
     *
     *   **OR**: Search conditions are evaluated by using a logical **OR**.
     *   **AND**: Search conditions are evaluated by using a logical **AND**.
     *
     * @example AND
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'criteria'    => 'Criteria',
        'currentPage' => 'CurrentPage',
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
     * @return DescribeContainerInstancesRequest
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
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
