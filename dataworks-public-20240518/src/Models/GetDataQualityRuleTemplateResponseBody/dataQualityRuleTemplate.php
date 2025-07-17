<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody\dataQualityRuleTemplate\checkingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody\dataQualityRuleTemplate\samplingConfig;
use AlibabaCloud\Tea\Model;

class dataQualityRuleTemplate extends Model
{
    /**
     * @description The check settings for sample data.
     *
     * @var checkingConfig
     */
    public $checkingConfig;

    /**
     * @description The code for the template.
     *
     * @example USER_DEFINED:123
     *
     * @var string
     */
    public $code;

    /**
     * @description The directory in which the template is stored. Slashes (/) are used to separate directory levels. The name of each directory level can be up to 1,024 characters in length. It cannot contain whitespace characters or slashes (/).
     *
     * @example /ods/order_data
     *
     * @var string
     */
    public $directoryPath;

    /**
     * @description The name of the template. The name can be up to 512 characters in length and can contain digits, letters, and punctuation marks.
     *
     * @example Table row Count Verification
     *
     * @var string
     */
    public $name;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 4020
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The sampling settings.
     *
     * @var samplingConfig
     */
    public $samplingConfig;

    /**
     * @description Available range of templates:
     * - Tenant: all tenants are available
     * - Project: only available in the current Project
     *
     * @example Project
     *
     * @var string
     */
    public $visibleScope;
    protected $_name = [
        'checkingConfig' => 'CheckingConfig',
        'code' => 'Code',
        'directoryPath' => 'DirectoryPath',
        'name' => 'Name',
        'projectId' => 'ProjectId',
        'samplingConfig' => 'SamplingConfig',
        'visibleScope' => 'VisibleScope',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingConfig) {
            $res['CheckingConfig'] = null !== $this->checkingConfig ? $this->checkingConfig->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->samplingConfig) {
            $res['SamplingConfig'] = null !== $this->samplingConfig ? $this->samplingConfig->toMap() : null;
        }
        if (null !== $this->visibleScope) {
            $res['VisibleScope'] = $this->visibleScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataQualityRuleTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingConfig'])) {
            $model->checkingConfig = checkingConfig::fromMap($map['CheckingConfig']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
            $model->samplingConfig = samplingConfig::fromMap($map['SamplingConfig']);
        }
        if (isset($map['VisibleScope'])) {
            $model->visibleScope = $map['VisibleScope'];
        }

        return $model;
    }
}
