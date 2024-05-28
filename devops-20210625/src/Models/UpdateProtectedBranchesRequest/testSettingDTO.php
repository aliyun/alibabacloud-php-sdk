<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest\testSettingDTO\checkConfig;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest\testSettingDTO\checkTaskQualityConfig;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest\testSettingDTO\codeGuidelinesDetection;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesRequest\testSettingDTO\sensitiveInfoDetection;
use AlibabaCloud\Tea\Model;

class testSettingDTO extends Model
{
    /**
     * @var checkConfig
     */
    public $checkConfig;

    /**
     * @var checkTaskQualityConfig
     */
    public $checkTaskQualityConfig;

    /**
     * @var codeGuidelinesDetection
     */
    public $codeGuidelinesDetection;

    /**
     * @example false
     *
     * @var bool
     */
    public $isRequired;

    /**
     * @var sensitiveInfoDetection
     */
    public $sensitiveInfoDetection;
    protected $_name = [
        'checkConfig'             => 'checkConfig',
        'checkTaskQualityConfig'  => 'checkTaskQualityConfig',
        'codeGuidelinesDetection' => 'codeGuidelinesDetection',
        'isRequired'              => 'isRequired',
        'sensitiveInfoDetection'  => 'sensitiveInfoDetection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkConfig) {
            $res['checkConfig'] = null !== $this->checkConfig ? $this->checkConfig->toMap() : null;
        }
        if (null !== $this->checkTaskQualityConfig) {
            $res['checkTaskQualityConfig'] = null !== $this->checkTaskQualityConfig ? $this->checkTaskQualityConfig->toMap() : null;
        }
        if (null !== $this->codeGuidelinesDetection) {
            $res['codeGuidelinesDetection'] = null !== $this->codeGuidelinesDetection ? $this->codeGuidelinesDetection->toMap() : null;
        }
        if (null !== $this->isRequired) {
            $res['isRequired'] = $this->isRequired;
        }
        if (null !== $this->sensitiveInfoDetection) {
            $res['sensitiveInfoDetection'] = null !== $this->sensitiveInfoDetection ? $this->sensitiveInfoDetection->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return testSettingDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkConfig'])) {
            $model->checkConfig = checkConfig::fromMap($map['checkConfig']);
        }
        if (isset($map['checkTaskQualityConfig'])) {
            $model->checkTaskQualityConfig = checkTaskQualityConfig::fromMap($map['checkTaskQualityConfig']);
        }
        if (isset($map['codeGuidelinesDetection'])) {
            $model->codeGuidelinesDetection = codeGuidelinesDetection::fromMap($map['codeGuidelinesDetection']);
        }
        if (isset($map['isRequired'])) {
            $model->isRequired = $map['isRequired'];
        }
        if (isset($map['sensitiveInfoDetection'])) {
            $model->sensitiveInfoDetection = sensitiveInfoDetection::fromMap($map['sensitiveInfoDetection']);
        }

        return $model;
    }
}
