<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListProjectsResponseBody\pageResult\projectList\tags;
use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @description Indicates whether the MaxCompute tables in the workspace are visible to the users within a tenant. Valid values:
     *
     *   0: invisible
     *   1: visible
     *
     * @example true
     *
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @example 1
     *
     * @var int
     */
    public $isDefault;

    /**
     * @description The ID of the resource group.
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @description The ID of the user used by the workspace owner.
     *
     * @example 1212
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The description of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The ID of the workspace.
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The tags.
     *
     * @example 122222
     *
     * @var string
     */
    public $projectOwnerBaseId;

    /**
     * @description The identifier of the workspace.
     *
     * @example 0
     *
     * @var int
     */
    public $projectStatus;

    /**
     * @description The name of the workspace.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $projectStatusCode;

    /**
     * @description The tag key.
     *
     * @example rg-acfmzbn7pti3zfa
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $tablePrivacyMode;

    /**
     * @description The tag value.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Indicates whether the workspace is a default workspace. Valid values:
     *
     *   1: The workspace is a default workspace.
     *   0: The workspace is not a default workspace.
     *
     * @example true
     *
     * @var bool
     */
    public $useProxyOdpsAccount;
    protected $_name = [
        'disableDevelopment'             => 'DisableDevelopment',
        'isDefault'                      => 'IsDefault',
        'projectDescription'             => 'ProjectDescription',
        'projectId'                      => 'ProjectId',
        'projectIdentifier'              => 'ProjectIdentifier',
        'projectName'                    => 'ProjectName',
        'projectOwnerBaseId'             => 'ProjectOwnerBaseId',
        'projectStatus'                  => 'ProjectStatus',
        'projectStatusCode'              => 'ProjectStatusCode',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tablePrivacyMode'               => 'TablePrivacyMode',
        'tags'                           => 'Tags',
        'useProxyOdpsAccount'            => 'UseProxyOdpsAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectOwnerBaseId) {
            $res['ProjectOwnerBaseId'] = $this->projectOwnerBaseId;
        }
        if (null !== $this->projectStatus) {
            $res['ProjectStatus'] = $this->projectStatus;
        }
        if (null !== $this->projectStatusCode) {
            $res['ProjectStatusCode'] = $this->projectStatusCode;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->tablePrivacyMode) {
            $res['TablePrivacyMode'] = $this->tablePrivacyMode;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->useProxyOdpsAccount) {
            $res['UseProxyOdpsAccount'] = $this->useProxyOdpsAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectOwnerBaseId'])) {
            $model->projectOwnerBaseId = $map['ProjectOwnerBaseId'];
        }
        if (isset($map['ProjectStatus'])) {
            $model->projectStatus = $map['ProjectStatus'];
        }
        if (isset($map['ProjectStatusCode'])) {
            $model->projectStatusCode = $map['ProjectStatusCode'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['TablePrivacyMode'])) {
            $model->tablePrivacyMode = $map['TablePrivacyMode'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UseProxyOdpsAccount'])) {
            $model->useProxyOdpsAccount = $map['UseProxyOdpsAccount'];
        }

        return $model;
    }
}
