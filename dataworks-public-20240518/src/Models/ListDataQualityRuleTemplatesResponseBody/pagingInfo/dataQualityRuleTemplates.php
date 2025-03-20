<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody\pagingInfo\dataQualityRuleTemplates\checkingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody\pagingInfo\dataQualityRuleTemplates\samplingConfig;
use AlibabaCloud\Tea\Model;

class dataQualityRuleTemplates extends Model
{
    /**
     * @description Sample verification settings
     *
     * @var checkingConfig
     */
    public $checkingConfig;

    /**
     * @description Rule template Code
     *
     * @example USER_DEFINED:123
     *
     * @var string
     */
    public $code;

    /**
     * @description The category directory where the custom template is stored, separated by slashes. Each level name can be up to 1024 characters in length and cannot contain white space characters or slashes.
     *
     * @example /ods/order_data
     *
     * @var string
     */
    public $directoryPath;

    /**
     * @description Rule template name, a combination of numbers, English letters, Chinese characters, and half-width punctuation marks, up to 512 characters in length
     *
     * @example Table row Count Verification
     *
     * @var string
     */
    public $name;

    /**
     * @description DataWorks workspace ID
     *
     * @example 2043
     *
     * @var int
     */
    public $projectId;

    /**
     * @description Settings required for sample collection
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
     * @return dataQualityRuleTemplates
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
