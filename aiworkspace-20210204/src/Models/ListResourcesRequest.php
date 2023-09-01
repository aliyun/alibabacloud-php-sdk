<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListResourcesRequest extends Model
{
    /**
     * @example group
     *
     * @var string
     */
    public $groupName;

    /**
     * @example ListResourceByWorkspace
     *
     * @var string
     */
    public $option;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example MaxCompute
     *
     * @var string
     */
    public $productTypes;

    /**
     * @example resource
     *
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceTypes;

    /**
     * @example true
     *
     * @var bool
     */
    public $verbose;

    /**
     * @example 123
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'groupName'     => 'GroupName',
        'option'        => 'Option',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'productTypes'  => 'ProductTypes',
        'resourceName'  => 'ResourceName',
        'resourceTypes' => 'ResourceTypes',
        'verbose'       => 'Verbose',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productTypes) {
            $res['ProductTypes'] = $this->productTypes;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductTypes'])) {
            $model->productTypes = $map['ProductTypes'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
