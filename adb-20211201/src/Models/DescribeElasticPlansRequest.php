<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticPlansRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL Data Lakehouse Edition (V3.0) clusters within a region.
     * @example amv-wz9509beptiz****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The name of the scaling plan.
     *
     * > If you do not specify this parameter, all scaling plans are queried.
     * @example test
     *
     * @var string
     */
    public $elasticPlanName;

    /**
     * @description Indicates whether the scaling plan was immediately enabled after the plan is created. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the resource group.
     *
     * > *   If you do not specify this parameter, the scaling plans of all resource groups are queried, covering the interactive resource group type and the elastic I/O unit (EIU) type.
     * >*   You can call the [DescribeDBResourceGroup](~~459446~~) operation to query the name of a resource group within a cluster.
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The type of the scaling plan. Valid values:
     *
     *   EXECUTOR: interactive resource groups, which fall into the computing resource category.
     *   WORKER: EIUs.
     *
     * @example EXECUTOR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'DBClusterId'       => 'DBClusterId',
        'elasticPlanName'   => 'ElasticPlanName',
        'enabled'           => 'Enabled',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'resourceGroupName' => 'ResourceGroupName',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->elasticPlanName) {
            $res['ElasticPlanName'] = $this->elasticPlanName;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticPlansRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ElasticPlanName'])) {
            $model->elasticPlanName = $map['ElasticPlanName'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
