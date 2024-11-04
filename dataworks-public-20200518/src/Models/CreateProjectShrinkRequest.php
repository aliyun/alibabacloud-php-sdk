<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. This parameter can be left empty.
     *
     * @example ABFUOEUOTRTRJKE
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to disable the Develop role. Valid values:
     *
     *   **false** (default)
     *   **true**
     *
     * @example false
     *
     * @var bool
     */
    public $disableDevelopment;

    /**
     * @description Specifies whether to allow you to download the query result from DataStudio. Valid values:
     *
     *   **1** (default): allows you to download the query result from DataStudio.
     *   **0**: does not allow you to download the query result from DataStudio.
     *
     * @example 1
     *
     * @var int
     */
    public $isAllowDownload;

    /**
     * @description The description of the workspace.
     *
     * @example test_describe
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @description The name of the workspace. The name can contain only letters, digits, and underscores (_) and must start with a letter or digit.
     *
     * This parameter is required.
     * @example test_project
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description The mode of the workspace. For more information about the differences between the modes of workspaces, see [Differences between workspaces in basic mode and workspaces in standard mode](https://help.aliyun.com/document_detail/85772.html).
     *
     * Valid values:
     *
     *   **2** (default): basic mode
     *   **3**: standard mode
     *
     * @example 3
     *
     * @var int
     */
    public $projectMode;

    /**
     * @description The display name of the workspace.
     *
     * This parameter is required.
     * @example test_project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzbn7pti3****
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The tags added to the workspace.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'clientToken'                    => 'ClientToken',
        'disableDevelopment'             => 'DisableDevelopment',
        'isAllowDownload'                => 'IsAllowDownload',
        'projectDescription'             => 'ProjectDescription',
        'projectIdentifier'              => 'ProjectIdentifier',
        'projectMode'                    => 'ProjectMode',
        'projectName'                    => 'ProjectName',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'tagsShrink'                     => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->disableDevelopment) {
            $res['DisableDevelopment'] = $this->disableDevelopment;
        }
        if (null !== $this->isAllowDownload) {
            $res['IsAllowDownload'] = $this->isAllowDownload;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->projectMode) {
            $res['ProjectMode'] = $this->projectMode;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DisableDevelopment'])) {
            $model->disableDevelopment = $map['DisableDevelopment'];
        }
        if (isset($map['IsAllowDownload'])) {
            $model->isAllowDownload = $map['IsAllowDownload'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['ProjectMode'])) {
            $model->projectMode = $map['ProjectMode'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
