<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationRequest extends Model
{
    /**
     * @description The application IDs.
     *
     * @example [
     * "5657d271-****-4f03-9bb2-431f942886bb",
     * "5657d271-****-4f03-9bb2-431f942bbddd"
     * ]
     * @var string
     */
    public $appIds;

    /**
     * @description The name of the application. Specify this parameter if you want to filter applications by application name.
     *
     * @example testapp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The cluster ID. Specify this parameter if you want to filter applications by cluster.
     *
     * @example c37aec2a-bcca-4ec1-****-************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @description The namespace ID. Specify this parameter if you want to filter applications by namespace.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description The ID of the namespace that you use in the exact search to filter applications.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $logicalRegionIdFilter;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group. Specify this parameter if you want to filter applications by resource group.
     *
     * @example rg-aek24j4s4b*****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'appIds'                => 'AppIds',
        'appName'               => 'AppName',
        'clusterId'             => 'ClusterId',
        'currentPage'           => 'CurrentPage',
        'logicalRegionId'       => 'LogicalRegionId',
        'logicalRegionIdFilter' => 'LogicalRegionIdFilter',
        'pageSize'              => 'PageSize',
        'resourceGroupId'       => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->logicalRegionIdFilter) {
            $res['LogicalRegionIdFilter'] = $this->logicalRegionIdFilter;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['LogicalRegionIdFilter'])) {
            $model->logicalRegionIdFilter = $map['LogicalRegionIdFilter'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
