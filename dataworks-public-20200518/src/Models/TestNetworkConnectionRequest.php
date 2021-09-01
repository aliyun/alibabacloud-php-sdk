<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class TestNetworkConnectionRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $datasourceName;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $resourceGroup;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'datasourceName' => 'DatasourceName',
        'envType'        => 'EnvType',
        'resourceGroup'  => 'ResourceGroup',
    ];

    public function validate()
    {
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('datasourceName', $this->datasourceName, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('resourceGroup', $this->resourceGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }

        return $model;
    }
}
