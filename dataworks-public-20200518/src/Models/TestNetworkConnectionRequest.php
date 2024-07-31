<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class TestNetworkConnectionRequest extends Model
{
    /**
     * @description The name of the data source.
     *
     * This parameter is required.
     * @example mysql_name
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @description The environment in which the data source resides. Valid values:
     *
     *   0: development environment
     *   1: production environment
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $envType;

    /**
     * @description The ID of the DataWorks workspace to which the data sources belong. You can call the [ListProjects](https://help.aliyun.com/document_detail/178393.html) operation to query the ID of the workspace.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The identifier of the resource group. You can call the [ListResourceGroups](https://help.aliyun.com/document_detail/173913.html) operation to query the identifier of the resource group.
     *
     * This parameter is required.
     * @example S_res_group_2XXXX4_1619100XXXXX
     *
     * @var string
     */
    public $resourceGroup;
    protected $_name = [
        'datasourceName' => 'DatasourceName',
        'envType'        => 'EnvType',
        'projectId'      => 'ProjectId',
        'resourceGroup'  => 'ResourceGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestNetworkConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        return $model;
    }
}
