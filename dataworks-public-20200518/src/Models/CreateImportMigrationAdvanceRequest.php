<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateImportMigrationAdvanceRequest extends Model
{
    /**
     * @example {     "ODPS": {       "zxy_8221431_engine": "wzp_kaifazheban_engine"     },     "EMR": {         "aaaa": "bbb"     }   }
     *
     * @var string
     */
    public $calculateEngineMap;

    /**
     * @example {     "resourceAutoCommit": false,     "resourceAutoDeploy": false,     "functionAutoCommit": false,     "functionAutoDeploy": false,     "tableAutoCommitToDev": false,     "tableAutoCommitToProd": false,     "ignoreLock": false,     "fileAutoCommit": false,     "fileAutoDeploy": false   }
     *
     * @var string
     */
    public $commitRule;

    /**
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @example test_import_001
     *
     * @var string
     */
    public $name;

    /**
     * @example /home/admin/xxx/import.zip
     *
     * @var Stream
     */
    public $packageFileObject;

    /**
     * @example DATAWORKS_MODEL
     *
     * @var string
     */
    public $packageType;

    /**
     * @example 123456
     *
     * @var int
     */
    public $projectId;

    /**
     * @example {"SCHEDULER_RESOURCE_GROUP": {"xxx":"yyy"},"DI_RESOURCE_GROUP":{"ccc":"ddd"}}
     *
     * @var string
     */
    public $resourceGroupMap;

    /**
     * @example {"test_workspace_src": "test_workspace_target"}
     *
     * @var string
     */
    public $workspaceMap;
    protected $_name = [
        'calculateEngineMap' => 'CalculateEngineMap',
        'commitRule'         => 'CommitRule',
        'description'        => 'Description',
        'name'               => 'Name',
        'packageFileObject'  => 'PackageFile',
        'packageType'        => 'PackageType',
        'projectId'          => 'ProjectId',
        'resourceGroupMap'   => 'ResourceGroupMap',
        'workspaceMap'       => 'WorkspaceMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calculateEngineMap) {
            $res['CalculateEngineMap'] = $this->calculateEngineMap;
        }
        if (null !== $this->commitRule) {
            $res['CommitRule'] = $this->commitRule;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageFileObject) {
            $res['PackageFile'] = $this->packageFileObject;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resourceGroupMap) {
            $res['ResourceGroupMap'] = $this->resourceGroupMap;
        }
        if (null !== $this->workspaceMap) {
            $res['WorkspaceMap'] = $this->workspaceMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImportMigrationAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalculateEngineMap'])) {
            $model->calculateEngineMap = $map['CalculateEngineMap'];
        }
        if (isset($map['CommitRule'])) {
            $model->commitRule = $map['CommitRule'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageFile'])) {
            $model->packageFileObject = $map['PackageFile'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ResourceGroupMap'])) {
            $model->resourceGroupMap = $map['ResourceGroupMap'];
        }
        if (isset($map['WorkspaceMap'])) {
            $model->workspaceMap = $map['WorkspaceMap'];
        }

        return $model;
    }
}
