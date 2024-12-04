<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataQualityRuleTemplateShrinkRequest extends Model
{
    /**
     * @description The check settings for sample data.
     *
     * @var string
     */
    public $checkingConfigShrink;

    /**
     * @description The directory in which the template is stored. Slashes (/) are used to separate directory levels. The name of each directory level can be up to 1,024 characters in length. It cannot contain whitespace characters or slashes (/).
     *
     * @var string
     */
    public $directoryPath;

    /**
     * @description The name of the template. The name can be up to 512 characters in length and can contain digits, letters, and punctuation marks.
     *
     * This parameter is required.
     * @var string
     */
    public $name;

    /**
     * @description The DataWorks workspace ID.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The sampling settings.
     *
     * @var string
     */
    public $samplingConfigShrink;

    /**
     * @description The applicable scope of the template. Valid values:
     *
     *   Tenant: The template is available in all workspaces in the current tenant.
     *   Project: The template is available only in the current workspace.
     *
     * @example Project
     *
     * @var string
     */
    public $visibleScope;
    protected $_name = [
        'checkingConfigShrink' => 'CheckingConfig',
        'directoryPath'        => 'DirectoryPath',
        'name'                 => 'Name',
        'projectId'            => 'ProjectId',
        'samplingConfigShrink' => 'SamplingConfig',
        'visibleScope'         => 'VisibleScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingConfigShrink) {
            $res['CheckingConfig'] = $this->checkingConfigShrink;
        }
        if (null !== $this->directoryPath) {
            $res['DirectoryPath'] = $this->directoryPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->samplingConfigShrink) {
            $res['SamplingConfig'] = $this->samplingConfigShrink;
        }
        if (null !== $this->visibleScope) {
            $res['VisibleScope'] = $this->visibleScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataQualityRuleTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingConfig'])) {
            $model->checkingConfigShrink = $map['CheckingConfig'];
        }
        if (isset($map['DirectoryPath'])) {
            $model->directoryPath = $map['DirectoryPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SamplingConfig'])) {
            $model->samplingConfigShrink = $map['SamplingConfig'];
        }
        if (isset($map['VisibleScope'])) {
            $model->visibleScope = $map['VisibleScope'];
        }

        return $model;
    }
}
