<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CreateImportMigrationAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $packageFileObject;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $resourceGroupMap;

    /**
     * @var string
     */
    public $workspaceMap;

    /**
     * @var string
     */
    public $calculateEngineMap;

    /**
     * @var string
     */
    public $commitRule;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'packageFileObject'  => 'PackageFileObject',
        'projectId'          => 'ProjectId',
        'name'               => 'Name',
        'packageType'        => 'PackageType',
        'resourceGroupMap'   => 'ResourceGroupMap',
        'workspaceMap'       => 'WorkspaceMap',
        'calculateEngineMap' => 'CalculateEngineMap',
        'commitRule'         => 'CommitRule',
        'description'        => 'Description',
    ];

    public function validate()
    {
        Model::validateRequired('packageFileObject', $this->packageFileObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packageFileObject) {
            $res['PackageFileObject'] = $this->packageFileObject;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->resourceGroupMap) {
            $res['ResourceGroupMap'] = $this->resourceGroupMap;
        }
        if (null !== $this->workspaceMap) {
            $res['WorkspaceMap'] = $this->workspaceMap;
        }
        if (null !== $this->calculateEngineMap) {
            $res['CalculateEngineMap'] = $this->calculateEngineMap;
        }
        if (null !== $this->commitRule) {
            $res['CommitRule'] = $this->commitRule;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['PackageFileObject'])) {
            $model->packageFileObject = $map['PackageFileObject'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['ResourceGroupMap'])) {
            $model->resourceGroupMap = $map['ResourceGroupMap'];
        }
        if (isset($map['WorkspaceMap'])) {
            $model->workspaceMap = $map['WorkspaceMap'];
        }
        if (isset($map['CalculateEngineMap'])) {
            $model->calculateEngineMap = $map['CalculateEngineMap'];
        }
        if (isset($map['CommitRule'])) {
            $model->commitRule = $map['CommitRule'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
