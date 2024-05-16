<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateImportMigrationAdvanceRequest extends Model
{
    /**
     * @description The mapping between the source compute engine instance and the destination compute engine instance.
     *
     * The following types of compute engine instances are supported: MaxCompute, E-MapReduce (EMR), Hadoop CDH, and Hologres.
     * @example {     "ODPS": {       "zxy_8221431_engine": "wzp_kaifazheban_engine"     },     "EMR": {         "aaaa": "bbb"     }   }
     *
     * @var string
     */
    public $calculateEngineMap;

    /**
     * @description The rule configured for automatically committing and deploying the import task. The rule contains the following parameters:
     *
     *   resourceAutoCommit: specifies whether resources are automatically committed. The value true indicates that the resources are automatically committed, and the value false indicates that the resources are not automatically committed.
     *   resourceAutoDeploy: specifies whether resources are automatically deployed. The value true indicates that the resources are automatically deployed, and the value false indicates that the resources are not automatically deployed.
     *   functionAutoCommit: specifies whether the function is automatically committed. The value true indicates that the function is automatically committed, and the value false indicates that the function is not automatically committed.
     *   functionAutoDeploy: specifies whether the function is automatically deployed. The value true indicates that the function is automatically deployed, and the value false indicates that the function is not automatically deployed.
     *   tableAutoCommitToDev: specifies whether the table is automatically committed to the development environment. The value true indicates that the table is automatically committed to the development environment, and the value false indicates that the table is not automatically committed to the development environment.
     *   tableAutoCommitToProd: specifies whether the table is automatically committed to the production environment. The value true indicates that the table is automatically committed to the production environment, and the value false indicates that the table is not automatically committed to the production environment.
     *   ignoreLock: specifies whether the lock is automatically ignored when an import task is locked. The value true indicates that the lock is automatically ignored, and the value false indicates that the lock is not automatically ignored. If you set this parameter to true for an import task, you can forcibly update the task even if the task is locked.
     *   fileAutoCommit: specifies whether the file is automatically committed. The value true indicates that the file is automatically committed, and the value false indicates that the file is not automatically committed.
     *   fileAutoDeploy: specifies whether the file is automatically deployed. The value true indicates that the file is automatically deployed, and the value false indicates that the file is not automatically deployed.
     *
     * @example {     "resourceAutoCommit": false,     "resourceAutoDeploy": false,     "functionAutoCommit": false,     "functionAutoDeploy": false,     "tableAutoCommitToDev": false,     "tableAutoCommitToProd": false,     "ignoreLock": false,     "fileAutoCommit": false,     "fileAutoDeploy": false   }
     *
     * @var string
     */
    public $commitRule;

    /**
     * @description The description of the import package.
     *
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the import task. The name must be unique within the workspace.
     *
     * This parameter is required.
     * @example test_import_001
     *
     * @var string
     */
    public $name;

    /**
     * @description The path of the import package.
     *
     **The import package must be uploaded. Example of the upload method:**`  Config config = new Config(); config.setAccessKeyId(accessId); config.setAccessKeySecret(accessKey); config.setEndpoint(popEndpoint); config.setRegionId(regionId); Client client = new Client(config); CreateImportMigrationAdvanceRequest request = new CreateImportMigrationAdvanceRequest(); request.setName("test_migration_api_" + System.currentTimeMillis()); request.setProjectId(123456L); request.setPackageType("DATAWORKS_MODEL"); request.setPackageFileObject(new FileInputStream("/home/admin/Downloads/test.zip")); RuntimeOptions runtime = new RuntimeOptions(); CreateImportMigrationResponse response = client.createImportMigrationAdvance(request, runtime); ... `
     *
     * This parameter is required.
     * @example /home/admin/xxx/import.zip
     *
     * @var Stream
     */
    public $packageFileObject;

    /**
     * @description The type of the import package. Valid values:
     *
     *   DATAWORKS_MODEL (standard format)
     *   DATAWORKS_V2 (Apsara Stack DataWorks V3.6.1 to V3.11)
     *   DATAWORKS_V3 (Apsara Stack DataWorks V3.12 and later)
     *
     * This parameter is required.
     * @example DATAWORKS_MODEL
     *
     * @var string
     */
    public $packageType;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the ID.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The mapping between the resource group for scheduling and the resource group for Data Integration. The keys and values in the mapping are the identifiers of the resource groups. Specify the mapping in the following format:
     *
     * ```
     * @example {"SCHEDULER_RESOURCE_GROUP": {"xxx":"yyy"},"DI_RESOURCE_GROUP":{"ccc":"ddd"}}
     *
     * @var string
     */
    public $resourceGroupMap;

    /**
     * @description The mapping between the prefixes for the names of the source and destination workspaces. When the system performs the import operation, the prefix for the name of the source workspace in the import package is replaced based on the mapping.
     *
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
